<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create() 
    {
        return view('create-account');
    }

    public function store() 
    {
        // Validate the form
        $this->validate(request(), [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'date_of_birth' => 'required',
            'phone' => 'required',

        ]);


        //$customer = Customer::create(request([]))

        // Create and save the user
        $user = User::create(request(['name', 'email', 'password']));

        //$name = explode(" ", request('name'));

        $customer = Customer::create(request(['name', 'date_of_birth', 'phone', 'gender']));

        // Optional: sign the user in
        auth()->login($user);

        // redirect to home page
        return redirect('/');
    }
}
