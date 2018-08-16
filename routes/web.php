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

// # handle login form with Customer controller's login function
// Route::post('/login', 'SessionsController@store');
// # allow user to logout by typing /logout in URL field
// Route::get('/logout', 'SessionsController@destroy');

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

Route::get('/my-account-account-info-edit', 'CustomerController@create');

Route::post('/save-changes', 'CustomerController@update');

Route::get('/change-password', 'CustomerController@showChangePassword');

Route::post('/change-password', 'CustomerController@changePassword');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

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

// Show cart page view
Route::get('/checkout-page-mybag', 'CartController@index')->name('cart.index');

Route::post('/checkout-page-mybag', 'CartController@store')->name('cart.store');

// removing items from cart (testing)
Route::get('deleteCart', 'CartController@deleteCart');

// show JSON cart DEBUG
Route::get('showCart', 'CartController@show');

Route::delete('/checkout-page-mybag{id}', 'CartController@destroy')->name('cart.destroy');

Route::get('/checkout-page', 'CheckoutController@index')->name('checkout.index');

#route for successfull order 
Route::get('/thank-you-page', function() {
    return view('thank-you-page');
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


// artisan make:auth routes
// scaffholding for login and register features
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
