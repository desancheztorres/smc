<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authentication Routes
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

/*************************************** ADMIN ***************************************************/

Route::group(['middleware' => ['auth'], 'prefix'=>'admin','as'=>'admin.'], function() {
    Route::view('/', 'admin.index')->name('index');
    // Blogs
    Route::resource('blogs_category', 'BlogCategoryController', ['except' => ['create', 'show', 'index']]);
    Route::resource('blogs', 'BlogController');
    Route::resource('tags', 'TagController', ['except' => ['create', 'show', 'index']]);
    Route::resource('keywords', 'KeywordController', ['except' => ['create', 'show', 'index']]);

    // Cards
    Route::resource('cards_category', 'CardCategoryController', ['except' => ['create', 'show', 'index']]);
    Route::resource('cards', 'CardController');

    // Loans
    Route::resource('loans_category', 'LoanCategoryController', ['except' => ['create', 'show', 'index']]);
    Route::resource('loans', 'LoanController');

    // Financial
    Route::resource('financials_category', 'FinancialCategoryController', ['except' => ['create', 'show', 'index']]);
    Route::resource('financials', 'FinancialController');
});



Route::get('/home', 'HomeController@index')->name('home');
