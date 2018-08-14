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

# handle login form with Customer controller's login function
Route::post('/login', 'SessionsController@store');
# allow user to logout by typing /logout in URL field
Route::get('/logout', 'SessionsController@destroy');

Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');

Route::get('/my-account-account-info', 'CustomerController@show');

Route::post('/subscribe', 'SubscriptionController@store');

// show all products
Route::get('/product-overview', 'ProductController@index');

// show product by its ID on a product-page
Route::get('/product/{id}', ['uses' =>'ProductController@show']);

// show billing/shipping address for a customer
Route::get('/my-account', 'CustomerController@showAccount');

# Manage homepage routes 
Route::get('/', function () {
    return view('index');
});

Route::get('/homepage', function() {
    return view('homepage');
});


Route::get('/product-page', function() {
    return view('product-page');
});

Route::get('/gallery-page-rows', function() {
    return view('gallery-page-rows');
});

Route::get('/checkout-page-mybag', function() {
    return view('checkout-page-mybag');
});

Route::get('/checkout-page', function() {
    return view('checkout-page');
});

Route::get('/thank-you-page', function() {
    return view('thank-you-page');
});


Route::get('/my-account-account-info-edit', function() {
    return view('my-account-account-info-edit');
});

Route::get('/my-account-orders', function() {
    return view('my-account-orders');
});

Route::get('/login-page', function() {
    return view('login-page');
});

Route::get('/create-account', function() {
    return view('create-account');
});

