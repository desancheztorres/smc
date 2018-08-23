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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryFinancials = FinancialCategory::all();
        $financials = Financial::paginate(5);
        $all_financials = Financial::count();

        return view('admin.financials.index')
            ->with('categoryFinancials', $categoryFinancials)
            ->with('financials', $financials)
            ->with('all_financials', $all_financials);
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

        return redirect()->route('admin.financials.index')->with('success', 'The financial was succesfully save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryFinancials = FinancialCategory::all();
        $financial = Financial::find($id);
        $cats = array();

        foreach ($categoryFinancials as $category) {
            $cats[$category->id] = $category->name;
        }

        return view('admin.financials.edit')
            ->with('cats', $cats)
            ->with('financial', $financial)
            ->with('categoryFinancials', $categoryFinancials);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
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

        $financial = Financial::find($id);

        //Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $financial->image;

            // Update

            $financial->logo = $filename;

            // Delete
            Storage::delete($oldFilename);

        }
        else{
            $financial->logo = 'noimage.png';
        }

        // Store in the database

        $financial->name = $request->name;
        $financial->category_id = $request->category_id;
        $financial->url = $request->url;
        $financial->minLoan = $request->minLoan;
        $financial->maxLoan = $request->maxLoan;
        $financial->minTerm = $request->minTerm;
        $financial->maxTerm = $request->maxTerm;
        $financial->apr = $request->apr;
        $financial->lender = $request->lender;
        $financial->rep = $request->rep;
        $financial->details = $request->details;

        $financial->update();

        // redirect to another page
        $financial = Financial::find($id);

        return redirect()->route('admin.financials.index')->with('success', 'The financial was succesfully save!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financials = Financial::all();
        $financial = Financial::find($id);

        Storage::delete($financial->logo);

        Financial::destroy($id);

        return redirect()->route('admin.financials.index')
            ->with('success', 'The financial was succesfully deleted!');
    }
}
