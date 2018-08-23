<?php

namespace App\Http\Controllers;

use App\LoanCategory;
use App\Loan;

use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use Storage;


class LoanCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function create()
    {
        return view('admin.loans_category.create');
    }

    public function edit($id) {

        $loanCategory = LoanCategory::find($id);

        return view('admin.loans.category_edit')
            ->with('loanCategory', $loanCategory);
    }

    public function store(Request $request)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.loans.index')
                ->withErrors($errors)
                ->withInput();
        }

        $loansCategory = new LoanCategory;

        // Store in the database

        $loansCategory->name = $request->name;

        $loansCategory->save();

        // redirect to another page

        return redirect()->route('admin.loans.index')->with('success', 'The loan category was succesfully save!');
    }

    public function update(Request $request, $id)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.loans.edit')
                ->withErrors($errors)
                ->withInput();
        }

        $loanCategory = LoanCategory::find($id);


        // Save the data to the database
        $loanCategory->name = $request->name;

        $loanCategory->update();


        return redirect()->route('admin.loans.index')
            ->with('success', 'The category was succesfully updated!');
    }

    public function destroy($id)
    {
        LoanCategory::where('category_id', $id)
            ->delete();

        Loan::where('category_id', $id)
            ->delete();

        return redirect()->route('admin.loans.index')
            ->with('success', 'The category was succesfully deleted!');


    }
}
