<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create() 
    {
        //return view('create-account');
    }

    public function store() 
    {
        // Validate the form
        $this->validate(request(), [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'

        ]);


        // Create and save the user
        $user = User::create(request(['name', 'email', 'password']));

        // Optional: sign the user in
        auth()->login($user);

        // redirect to home page
        return redirect('/');
    }
}
