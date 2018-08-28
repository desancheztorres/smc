<?php

namespace App\Http\Controllers;

use App\Financial;
use App\FinancialCategory;
use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use Storage;


class FinancialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $categoryFinancials = FinancialCategory::all();
        $financials = Financial::all();
        $all_financials = Financial::count();
        $all_categoryFinancials = FinancialCategory::count();

        return view('admin.financials.index')
            ->with('categoryFinancials', $categoryFinancials)
            ->with('financials', $financials)
            ->with('all_financials', $all_financials)
            ->with('all_categoryFinancials', $all_categoryFinancials);
    }


    public function create()
    {
        $financialsCategories = FinancialCategory::all();

        return view('admin.financials.create')
            ->with('financialCategories', $financialsCategories);
    }


    public function store(Request $request)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'category_id' => 'required|integer',
            'logo' => 'nullable',
            'url' => 'required|max:191',
            'minLoan' => 'required',
            'maxLoan' => 'required',
            'minTerm' => 'required',
            'maxTerm' => 'required',
            'apr' => 'required',
            'lender' => 'required',
            'rep' => 'required',
            'details' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.financials.index')
                ->withErrors($errors)
                ->withInput();
        }

        $financials = new Financial;

        //Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);

            $financials->logo = $filename;

        }
        else{
            $financials->logo = 'noimage.png';
        }

        // Store in the database

        $financials->name = $request->name;
        $financials->category_id = $request->category_id;
        $financials->url = $request->url;
        $financials->minLoan = $request->minLoan;
        $financials->maxLoan = $request->maxLoan;
        $financials->minTerm = $request->minTerm;
        $financials->maxTerm = $request->maxTerm;
        $financials->apr = $request->apr;
        $financials->lender = $request->lender;
        $financials->rep = $request->rep;
        $financials->details = $request->details;

        $financials->save();

        // redirect to another page

        return redirect()->route('admin.financials.index')->with('success', 'The Financial was succesfully save!');
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {
        $financial = Financial::find($id);
        $categoryFinancials = FinancialCategory::all();
        $all_financials = financial::count();

        return view('admin.financials.edit')
            ->with('categoryFinancials', $categoryFinancials)
            ->with('financial', $financial)
            ->with('all_financials', $all_financials);
    }


    public function update(Request $request, $id)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'category_id' => 'required|integer',
            'logo' => 'nullable',
            'url' => 'required|max:191',
            'minLoan' => 'required',
            'maxLoan' => 'required',
            'minTerm' => 'required',
            'maxTerm' => 'required',
            'apr' => 'required',
            'lender' => 'required',
            'rep' => 'required',
            'details' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.financials.create')
                ->withErrors($errors)
                ->withInput();
        }

        $financials = Financial::find($id);

        //Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $financials->image;

            // Update

            $financials->logo = $filename;

            // Delete
            Storage::delete($oldFilename);

        }
        else{
            $financials->logo = 'noimage.png';
        }

        // Store in the database

        $financials->name = $request->name;
        $financials->category_id = $request->category_id;
        $financials->url = $request->url;
        $financials->minLoan = $request->minLoan;
        $financials->maxLoan = $request->maxLoan;
        $financials->minTerm = $request->minTerm;
        $financials->maxTerm = $request->maxTerm;
        $financials->apr = $request->apr;
        $financials->lender = $request->lender;
        $financials->rep = $request->rep;
        $financials->details = $request->details;

        $financials->update();

        // redirect to another page
        $financials = Financial::find($id);

        return redirect()->route('admin.financials.index')->with('success', 'The financial card was succesfully save!');
    }


    public function destroy($id)
    {
        $financial = Financial::find($id);

        Storage::delete($financial->logo);

        Financial::destroy($id);

        return redirect()->route('admin.financials.index')
            ->with('success', 'The financial card was succesfully deleted!');
    }
}
