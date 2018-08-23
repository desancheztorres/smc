<?php

namespace App\Http\Controllers;

use App\Loan;
use App\LoanCategory;
use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use Storage;


class LoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function listLoans()
    {
        $loans = Loan::paginate(5);

        $totalLoans = Loan::count();

        $loans = Loan::all();

        return view('settings.loans')
            ->with('totalLoans', $totalLoans)
            ->with('loans', $loans);
    }

    public function index()
    {
        $categoryLoans = LoanCategory::all();
        $loans = Loan::all();
        $all_loans = Loan::count();
        $all_categoryLoans = LoanCategory::count();

        return view('admin.loans.index')
            ->with('categoryLoans', $categoryLoans)
            ->with('loans', $loans)
            ->with('all_loans', $all_loans)
            ->with('all_categoryLoans', $all_categoryLoans);
    }


    public function create()
    {
        $loanCategories = LoanCategory::all();

        return view('admin.loans.create')
            ->with('loanCategories', $loanCategories);
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
            return redirect()->route('admin.loans.index')
                ->withErrors($errors)
                ->withInput();
        }

        $loans = new Loan;

        //Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);

            $loans->logo = $filename;

        }
        else{
            $loans->logo = 'noimage.png';
        }

        // Store in the database

        $loans->name = $request->name;
        $loans->category_id = $request->category_id;
        $loans->url = $request->url;
        $loans->minLoan = $request->minLoan;
        $loans->maxLoan = $request->maxLoan;
        $loans->minTerm = $request->minTerm;
        $loans->maxTerm = $request->maxTerm;
        $loans->apr = $request->apr;
        $loans->lender = $request->lender;
        $loans->rep = $request->rep;
        $loans->details = $request->details;

        $loans->save();

        // redirect to another page

        return redirect()->route('admin.loans.index')->with('success', 'The loan was succesfully save!');
    }


    public function show(Loan $loan)
    {
        //
    }


    public function edit($id)
    {
        $loan = Loan::find($id);
        $categoryLoans = LoanCategory::all();
        $all_loans = Loan::count();

        return view('admin.loans.edit')
            ->with('categoryLoans', $categoryLoans)
            ->with('loan', $loan)
            ->with('all_loans', $all_loans);
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
            return redirect()->route('admin.loans.create')
                ->withErrors($errors)
                ->withInput();
        }

        $loan = Loan::find($id);

        //Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $loan->image;

            // Update

            $loan->logo = $filename;

            // Delete
            Storage::delete($oldFilename);

        }
        else{
            $loan->logo = 'noimage.png';
        }

        // Store in the database

        $loan->name = $request->name;
        $loan->category_id = $request->category_id;
        $loan->url = $request->url;
        $loan->minLoan = $request->minLoan;
        $loan->maxLoan = $request->maxLoan;
        $loan->minTerm = $request->minTerm;
        $loan->maxTerm = $request->maxTerm;
        $loan->apr = $request->apr;
        $loan->lender = $request->lender;
        $loan->rep = $request->rep;
        $loan->details = $request->details;

        $loan->update();

        // redirect to another page
        $loans = Loan::find($id);

        return redirect()->route('admin.loans.index')->with('success', 'The loan was succesfully save!');
    }


    public function destroy($id)
    {
        $loans = Loan::all();
        $loan = Loan::find($id);

        Storage::delete($loan->logo);

        Loan::destroy($id);

        return redirect()->route('admin.loans.index')
            ->with('success', 'The card was succesfully deleted!');
    }
}
