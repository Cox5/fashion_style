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
Route::get('/login-page', 'SessionsController@index');

# Allow user to logout by typing /logout in URL field
Route::get('/logout', 'SessionsController@destroy')->name('logout');

# Registration routes | GET, POST
Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');

# Show customer account information
Route::get('/my-account-account-info', 'CustomerController@show')->name('account-info.show');

# Subscrice button for newsletter 
Route::post('/subscribe', 'SubscriptionController@store');

# Show all products
Route::get('/product-overview', 'ProductController@index');

# Show product by its ID on a product-page
Route::get('/product/{id}', 'ProductController@show');

# Show billing/shipping address for a customer
Route::get('/my-account', 'CustomerController@showAccount')->name('account.show');

# Show customer information 
Route::get('/my-account-account-info-edit', 'CustomerController@create');

# Edit customer information
Route::post('/save-changes', 'CustomerController@update');

# Change password routes | GET, POST
Route::get('/change-password', 'UpdatePasswordController@index');
Route::post('/change-password', 'UpdatePasswordController@update');

# Coupon routes | POST, DELETE
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

# Show cart page view and add products to cart | GET, POST
Route::get('/checkout-page-mybag', 'CartController@index')->name('cart.index');
Route::post('/checkout-page-mybag', 'CartController@store')->name('cart.store');

# Remove an item from cart
Route::delete('/checkout-page-mybag{id}', 'CartController@destroy')->name('cart.destroy');

# Product filtration
Route::get('/filter_form', function () {
    return view('filter_form');
});
Route::get('/filter-results', 'ProductController@filter')->name('product.filter');

# Remove all items from cart (testing | debug)
Route::get('deleteCart', 'CartController@deleteCart');

# show JSON cart DEBUG
Route::get('showCart', 'CartController@show');

# Proceed to checkout page once a customer has added item/s to cart
Route::get('/checkout-page', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout-page', 'CheckoutController@store')->name('checkout.store');

# Search function
Route::get('search-results', 'ProductController@search')->name('search');

# Order page
Route::get('/my-account-orders', 'OrdersController@show')->name('order.show');

# Invoice generate route
Route::get('/pdfview', 'OrdersController@pdfview')->name('order.pdfview');


/*
|--------------------------------------------------------------------------
| Homepage Routes
|-------------------------------------------------------------------------- */

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

# Route for successfull order 
Route::get('/thank-you-page', function() {
    if(Auth::check()) {
        return view('thank-you-page');
    } else {
        return view('not-authorized');
    }
});

Route::get('/create-account', function() {
    return view('create-account');
});


# Integrated routes for Auth
// artisan make:auth routes
// scaffholding for login and register features
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
