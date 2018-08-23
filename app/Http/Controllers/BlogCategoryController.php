<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use App\Blog;
use Illuminate\Http\Request;
use Validator;
use Session;


class BlogCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function store(Request $request)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.cards.index')
                ->withErrors($errors)
                ->withInput();
        }

        $blogCategory = new BlogCategory;

        // Store in the database

        $blogCategory->name = $request->name;

        $blogCategory->save();

        // redirect to another page

        return redirect()->route('admin.blogs.index')
            ->with('success', 'The blog category was succesfully save!');
    }

    public function edit($id) {
        $category = BlogCategory::find($id);
        return view('admin.blogs.category_edit')
            ->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.blogs_category.edit')
                ->withErrors($errors)
                ->withInput();
        }

        $blogCategory = BlogCategory::find($id);


        // Save the data to the database
        $blogCategory->name = $request->name;

        $blogCategory->update();

        // redirect with flash data to cards.show
        $blogs = Blog::all();



        return redirect()->route('admin.blogs.index')
            ->with('blogs', $blogs)
            ->with('success', 'The category was succesfully updated!');
    }

    public function destroy($id)
    {
        $blogCategory = BlogCategory::find($id);

        $blogCategory::destroy($id);

        Blog::where('category_id', $id)
            ->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'The category was succesfully deleted!');


    }
}
