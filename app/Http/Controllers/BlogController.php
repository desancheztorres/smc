<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogCategory;
use App\Tag;
use App\Keyword;
use Validator;
use Session;
use Image;
use Storage;


class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogsList()
    {
        $blogs = Blog::where('status', 1)->paginate(9);
        return view('frontend.blogs.index')
            ->with('blogs', $blogs);
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.blogs.detail')
            ->with('blog', $blog);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_blogs = Blog::count();
        $all_categoryBlogs = BlogCategory::count();
        $all_tags = Tag::count();
        $all_keywords = Keyword::count();
        $categoryBlogs = BlogCategory::all();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        $tags = Tag::all();
        $keywords = Keyword::all();

        return view('admin.blogs.index')
            ->with('categoryBlogs', $categoryBlogs)
            ->with('blogs', $blogs)
            ->with('tags', $tags)
            ->with('all_tags', $all_tags)
            ->with('all_keywords', $all_keywords)
            ->with('all_blogs', $all_blogs)
            ->with('all_categoryBlogs', $all_categoryBlogs)
            ->with('keywords', $keywords);
    }

    public function create() {
        $categoryBlogs = BlogCategory::all();
        $tags = Tag::all();
        $all_tags = array();
        $keywords = Keyword::all();
        $all_keywords = array();

        foreach ($tags as $tag) {
            $all_tags[$tag->id] = $tag->name;
        }

        foreach ($keywords as $keyword) {
            $all_keywords[$keyword->id] = $keyword->name;
        }
        return view('admin.blogs.create')
            ->with('categoryBlogs', $categoryBlogs)
            ->with('all_tags', $all_tags)
            ->with('all_keywords', $all_keywords);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data

        if ($request->has('image')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:191',
                'subtitle' => 'nullable|max:191',
                'category_id' => 'required|integer',
                'image' => 'nullable',
                'alt_image' => 'required',
                'content' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:191|unique:blogs,slug',
                'meta_description' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:191',
                'subtitle' => 'nullable|max:191',
                'category_id' => 'required|integer',
                'image' => 'nullable',
                'alt_image' => 'nullable',
                'content' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:191|unique:blogs,slug',
                'meta_description' => 'required',
            ]);
        }

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.blogs.create')
                ->withErrors($errors)
                ->withInput()
                ->with('error', 'The blog has not been saved!');
        }

        $blogs = new Blog;

        //Upload the image

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);

            $blogs->image = $filename;
            $blogs->alt_image = $request->alt_image;

        }
        else{
            $blogs->image = '1.jpg';
        }

        // Store in the database

        $blogs->title = $request->title;
        $blogs->subtitle = $request->subtitle;
        $blogs->category_id = $request->category_id;
        $blogs->alt_image = $request->alt_image;
        $blogs->content = $request->content;
        $blogs->slug = $request->slug;
        $blogs->meta_description = $request->meta_description;
        $blogs->status = $request->status;

        $blogs->save();

        $blogs->tags()->sync($request->tags, false);
        $blogs->keywords()->sync($request->keywords, false);

        // redirect to another page

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'The blog was succesfully save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.show')
            ->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // Find the blog in the database and save as a var
        $categoryBlogs = BlogCategory::all();
        $blog = Blog::find($id);
        $tags = Tag::all();
        $all_tags = array();
        $keywords = Keyword::all();
        $all_keywords = array();

        foreach ($keywords as $keyword) {
            $all_keywords[$keyword->id] = $keyword->name;
        }

        foreach ($tags as $tag) {
            $all_tags[$tag->id] = $tag->name;
        }

        // return the view and pass in the var we previously created

        return view('admin.blogs.edit')
            ->with('categoryBlogs', $categoryBlogs)
            ->with('blog', $blog)
            ->with('all_tags', $all_tags)
            ->with('all_keywords', $all_keywords);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Validate the data

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'subtitle' => 'nullable|max:191',
            'category_id' => 'required|integer',
            'image' => 'nullable',
            'alt_image' => 'nullable',
            'content' => 'required',
            'meta_description' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.blogs.edit')
                ->withErrors($errors)
                ->withInput();
        }

        $blog = Blog::find($id);

        // Upload the image

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $blog->image;

            // Update

            $blog->image = $filename;

            // Delete
            Storage::delete($oldFilename);
        }

        // Save the data to the database
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->category_id = $request->category_id;
        $blog->alt_image = $request->alt_image;
        $blog->content = $request->content;
        $blog->slug = $request->slug;
        $blog->meta_description = $request->meta_description;
        $blog->status = $request->status;

        $blog->update();

        $blog->tags()->sync($request->tags);
        $blog->keywords()->sync($request->keywords);

        // redirect with flash data to cards.show
        $blogs = Blog::all();



        return redirect()->route('admin.blogs.index')
            ->with('blogs', $blogs)
            ->with('blog', $blog)
            ->with('success', 'The blog was succesfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $blog = Blog::find($id);

        Storage::delete($blog->image);

        Blog::destroy($id);

        deleteBlogTags($id);
        deleteBlogKeywords($id);


        return redirect()->route('admin.blogs.index')
            ->with('success', 'The blog was succesfully deleted!');
    }

}
