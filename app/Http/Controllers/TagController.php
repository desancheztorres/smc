<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Validator;

class TagController extends Controller
{
//    public function __construct() {
//        $this->middleware('auth');
//    }

    public function store(Request $request)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.blogs.index')
                ->withErrors($errors)
                ->withInput();
        }

        $tags = new Tag;


        // Store in the database

        $tags->name = $request->name;

        $tags->save();

        // redirect to another page

        return redirect()->route('admin.blogs.index')->with('success', 'The tag was succesfully save!');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);

        // redirect to another page

        return view('admin.blogs.tag_edit')->with('tag', $tag);
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

        $tag = Tag::find($id);


        // Save the data to the database
        $tag->name = $request->name;

        $tag->update();

        // redirect with flash data to cards.show


        return redirect()->route('admin.blogs.index');
    }

    public function destroy($id)
    {
        $tags = Tag::all();

        Tag::destroy($id);

        return redirect()->route('admin.blogs.index')
            ->with('tags', $tags)->with('success', 'The tag was succesfully deleted!');
    }
}
