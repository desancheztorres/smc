<?php

namespace App\Http\Controllers;

use App\FinancialCategory;
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

        return redirect()->route('admin.financials.index')->with('success', 'The financial category was succesfully save!');
    }


    public function update(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        $financialCategory = FinancialCategory::find($id);

        $financialCategory::destroy($id);

        return redirect()->route('admin.financials.index')
            ->with('success', 'The category was succesfully deleted!');


    }
}
