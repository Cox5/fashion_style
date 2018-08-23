<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;

class SessionsController extends Controller
{

    public function __construct() 
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    //
    public function index() 
    {
        return view('login-page');
    }

    public function destroy() 
    {
        // log out the user
        auth()->logout();

        session()->forget('coupon');
        Cart::instance('default')->destroy();

        // redirect to last previous page
        return redirect('/');
    }

    public function store() 
    {
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
