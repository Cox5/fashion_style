<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Address;

class RegistrationController extends Controller
{
    
    public function create() 
    {
        return view('create-account');
    }

    public function store(Request $request) 
    {
        # Validate the form
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
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


        # Request and hash the password
        $password = request('password');
        $hashed = bcrypt($password);

        # Create and save the user
        $user = new User; 

        # Merge first and last name together 
        $name = request('firstname') . " " . request('lastname');

        # Set users' information from request
        $user->name = $name;
        $user->email = request('email');
        $user->password = $hashed;

        # Save the uer to DB
        $user->save();

        # Add form data to customer table
        $customer = new Customer;
        $address = new Address;

        $customer->user_id = $user->id;
        $customer->firstname = request('firstname');
        $customer->lastname = request('lastname');
        $customer->date_of_birth = request('date_of_birth');
        $customer->phone = request('phone');
        $customer->gender = request('gender');
        
        
        $address->user_id = $user->id;
        $address->bill_address = request('bill_address');
        $address->bill_city = request('bill_city');
        $address->bill_zip = request('bill_zip');
        $address->bill_country = request('bill_country');

        $address->ship_address = request('ship_address');
        $address->ship_city = request('ship_city');
        $address->ship_zip = request('ship_zip');
        $address->ship_country = request('ship_country');
        
        # Save data to customer and address DB tables
        $customer->save();
        $address->save();

        # Optional: sign the user in after registration
        auth()->login($user);

        # redirect to home page
        return redirect('/');
    }
}
