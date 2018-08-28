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

/*************************************** FRONTEND ***************************************************/

Route::name('frontend.')->group(function () {
    Route::view('/', 'frontend.homepage')->name('homepage');
    Route::view('/aboutus', 'frontend.aboutus')->name('aboutus');
    Route::view('/applynow', 'frontend.applynow')->name('applynow');
    Route::view('/members', 'frontend.members')->name('members');
    Route::view('/contactus', 'frontend.contactus')->name('contactus');
    Route::get('/blogs', 'PageController@getBlogs')->name('blogs');
    Route::get('/blogs/{slug}', 'PageController@getBlogDetail')->name('blogs.detail');
});

/*************************************** BLOG ***************************************************/


Route::get('/home', 'HomeController@index')->name('home');

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

    // Users
    Route::resource('users', 'UserController');
});
