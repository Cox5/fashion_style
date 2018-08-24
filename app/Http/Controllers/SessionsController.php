<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;
use Auth;

class SessionsController extends Controller
{

    public function __construct() 
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function index() 
    {
        if (Auth::check()) {
            return view('/');
        }

        return view('login-page');
    }

    public function destroy() 
    {
        # log out the user
        auth()->logout();

        # On log out, remove all products and coupons from session - DISABLED CURRENTLY
        // session()->forget('coupon');
        // Cart::instance('default')->destroy();

        return redirect('/');
    }

    public function store() 
    {
        if (Auth::check()) {
            return redirect('/');
        }
        // Attempt to login user
        if (!auth()->attempt(request(['email', 'password']))) 
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        // If true, sign the user in
        // return redirect()->back();
        return redirect('/');

    }
}
