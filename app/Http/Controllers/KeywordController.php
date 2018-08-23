<?php

namespace App\Http\Controllers;

use App\Keyword;
use Illuminate\Http\Request;
use Validator;

class KeywordController extends Controller
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
            return redirect()->route('admin.blogs.index')
                ->withErrors($errors)
                ->withInput();
        }

        $keywords = new Keyword;


        // Store in the database

        $keywords->name = $request->name;

        $keywords->save();

        // redirect to another page

        return redirect()->route('admin.blogs.index')->with('success', 'The keyword was succesfully save!');
    }

    public function edit(Request $request, $id)
    {
        $keyword = Keyword::find($id);

        // redirect to another page

        return view('admin.blogs.keyword_edit')->with('keyword', $keyword);
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

        $keyword = Keyword::find($id);


        // Save the data to the database
        $keyword->name = $request->name;

        $keyword->update();

        // redirect with flash data to cards.show


        return redirect()->route('admin.blogs.index');
    }

    public function destroy($id)
    {
        $keywords = Keyword::all();

        Keyword::destroy($id);

        return redirect()->route('admin.blogs.index')
            ->with('keywords', $keywords)->with('success', 'The tag was succesfully deleted!');
    }
}
