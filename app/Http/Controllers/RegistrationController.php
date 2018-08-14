<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;

class RegistrationController extends Controller
{
    //
    public function create() 
    {
        return view('create-account');
    }

    public function store(Request $request) 
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);


        dump($request->all());

        // Create and save the user
        $user = User::create(request(['name', 'email', 'password']));

        // izvuci iz $user ID
        dump($user);

        // split name from form to first and last name
        $name = explode(" ", request('name'));
        $firstname = $name[0];
        $lastname = $name[1];

        // Add form data to customer table
        $customer = new Customer;

        $customer->user_id = $user->id;
        $customer->firstname = $firstname;
        $customer->lastname = $lastname;
        $customer->date_of_birth = request('date_of_birth');
        $customer->phone = request('phone');
        $customer->gender = request('gender');

        $customer->save();

        // Optional: sign the user in
        auth()->login($user);

        // redirect to home page
        return redirect('/');
    }
}
