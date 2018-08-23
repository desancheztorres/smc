<?php

namespace App\Http\Controllers;

use App\FinancialCategory;
use App\Financial;
use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use Storage;


class FinancialCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create()
    {
        return view('admin.financials.create');
    }

    public function edit($id) {

        $financialCategory = FinancialCategory::find($id);

        return view('admin.financials.category_edit')
            ->with('financialCategory', $financialCategory);
    }

    public function store(Request $request)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.financials.index')
                ->withErrors($errors)
                ->withInput();
        }

        $financialCategory = new FinancialCategory;

        // Store in the database

        $financialCategory->name = $request->name;

        $financialCategory->save();

        // redirect to another page

        return redirect()->route('admin.financials.index')->with('success', 'The financial card category was succesfully save!');
    }

    public function update(Request $request, $id)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.financials.edit')
                ->withErrors($errors)
                ->withInput();
        }

        $financialCategory = FinancialCategory::find($id);


        // Save the data to the database
        $financialCategory->name = $request->name;

        $financialCategory->update();


        return redirect()->route('admin.financials.index')
            ->with('success', 'The category was succesfully updated!');
    }

    public function destroy($id)
    {

        FinancialCategory::destroy($id);

        Financial::where('category_id', $id)
            ->delete();

        return redirect()->route('admin.financials.index')
            ->with('success', 'The category was succesfully deleted!');


    }
}
