<?php

namespace App\Http\Controllers;

use App\Card;
use App\CardCategory;

use Illuminate\Http\Request;
use Validator;
use Session;
use Image;
use Storage;


class CardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function listCards() {
        return view('settings.cards');
    }

    public function index()
    {
        $categoryCards = CardCategory::all();
        $cards = Card::paginate(5);
        $all_cards = Card::count();
        $all_categoryCards = CardCategory::count();

        return view('admin.cards.index')
            ->with('categoryCards', $categoryCards)
            ->with('cards', $cards)
            ->with('all_cards', $all_cards)
            ->with('all_categoryCards', $all_categoryCards);
    }

    public function create() {
        $categoryCards = CardCategory::all();
        return view('admin.cards.create')
            ->with('categoryCards', $categoryCards);
    }

    public function store(Request $request)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'category_id' => 'required|integer',
            'logo' => 'nullable',
            'link' => 'required|max:191',
            'title1' => 'required|max:191',
            'title2' => 'required|max:191',
            'title3' => 'required|max:191',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'example' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.cards.index')
                ->withErrors($errors)
                ->withInput();
        }

        $cards = new Card;

        //Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);

            $cards->logo = $filename;

        }
        else{
            $cards->logo = 'noimage.png';
        }

        // Store in the database

        $cards->name = $request->name;
        $cards->category_id = $request->category_id;
        $cards->link = $request->link;
        $cards->title1 = $request->title1;
        $cards->title2 = $request->title2;
        $cards->title3 = $request->title3;
        $cards->info1 = $request->info1;
        $cards->info2 = $request->info2;
        $cards->description1 = $request->description1;
        $cards->description2 = $request->description2;
        $cards->description3 = $request->description3;
        $cards->example = $request->example;

        $cards->save();

        // redirect to another page

        return redirect()->route('admin.cards.index')->with('success', 'The card was succesfully save!');
    }

    public function show(Card $card)
    {
        //
    }

    public function edit($id)
    {
        $categoryCards = CardCategory::all();
        $card = Card::find($id);
        $all_cards = Card::count();
        return view('admin.cards.edit')
            ->with('categoryCards', $categoryCards)
            ->with('card', $card)
            ->with('all_cards', $all_cards);
    }

    public function update(Request $request, $id)
    {
        // Validate the data

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'category_id' => 'required|integer',
            'logo' => 'nullable',
            'link' => 'required|max:191',
            'title1' => 'required|max:191',
            'title2' => 'required|max:191',
            'title3' => 'required|max:191',
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'example' => 'required',
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return redirect()->route('admin.cards.edit')
                ->withErrors($errors)
                ->withInput();
        }

        $card = Card::find($id);

        // Upload the image

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/admin/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $card->image;

            // Update

            $card->logo = $filename;

            // Delete
            Storage::delete($oldFilename);
        }

        // Save the data to the database
        $card->name = $request->name;
        $card->category_id = $request->category_id;
        $card->link = $request->link;
        $card->title1 = $request->title1;
        $card->title2 = $request->title2;
        $card->title3 = $request->title3;
        $card->info1 = $request->info1;
        $card->info2 = $request->info2;
        $card->description1 = $request->description1;
        $card->description2 = $request->description2;
        $card->description3 = $request->description3;
        $card->example = $request->example;

        $card->update();

        // redirect with flash data to cards.show
        $card = Card::all();



        return redirect()->route('admin.cards.index')
            ->with('cards', $card)->with('success', 'The card was succesfully updated!');
    }

    public function destroy($id)
    {
        $cards = Card::all();
        $card = Card::find($id);

        Storage::delete($card->logo);

        Card::destroy($id);

        return redirect()->route('admin.cards.index')
            ->with('cards', $cards)->with('success', 'The card was succesfully deleted!');

    }
}
