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
            'bill_address' => 'required',
            'bill_city' => 'required',
            'bill_zip' => 'required',
            'bill_country' => 'required',
            'ship_address' => 'required',
            'ship_city' => 'required',
            'ship_zip' => 'required',
            'ship_country' => 'required',
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
        
        $customer->bill_address = request('bill_address');
        $customer->bill_city = request('bill_city');
        $customer->bill_zip = request('bill_zip');
        $customer->bill_country = request('bill_country');

        $customer->ship_address = request('ship_address');
        $customer->ship_city = request('ship_city');
        $customer->ship_zip = request('ship_zip');
        $customer->ship_country = request('ship_country');

        $customer->save();

        // Optional: sign the user in
        auth()->login($user);

        // redirect to home page
        return redirect('/');
    }
}
