<?php

namespace App\Http\Controllers;

use App\CardCategory;
use App\Card;
use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use Storage;


class CardCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function edit($id) {

        $cardCategory = CardCategory::find($id);

        return view('admin.cards.category_edit')
            ->with('cardCategory', $cardCategory);
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

        $cardCategory = new CardCategory;

        // Store in the database

        $cardCategory->name = $request->name;

        $cardCategory->save();

        // redirect to another page

        return redirect()->route('admin.cards.index')->with('success', 'The card category was succesfully save!');
    }

    public function update(Request $request, $id)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.cards_category.edit')
                ->withErrors($errors)
                ->withInput();
        }

        $cardCategory = CardCategory::find($id);


        // Save the data to the database
        $cardCategory->name = $request->name;

        $cardCategory->update();

        // redirect with flash data to cards.show
        $cards = Card::all();



        return redirect()->route('admin.cards.index')
            ->with('cards', $cards)
            ->with('success', 'The category was succesfully updated!');
    }

    public function destroy($id)
    {
        $cardCategory = CardCategory::find($id);

        $cardCategory::destroy($id);

        Card::where('category_id', $id)
            ->delete();

        return redirect()->route('admin.cards.index')
            ->with('success', 'The category was succesfully deleted!');


    }
}
