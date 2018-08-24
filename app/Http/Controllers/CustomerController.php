<?php

namespace App\Http\Controllers;

use App\Customer;
use Auth;
use App\User;
use App\Address;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # Check if the user is logged in
        if (Auth::check()) 
        {
            $user = Auth::user();
            $customer = $user->customer();

            return view('my-account-account-info-edit')->with(['user' => $user, 'customer' => $customer]);
        }

        return view('not-authorized');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    
    {
        if (Auth::check()) 
        {
            $user = Auth::user();
            $customer = $user->customer();

            return view('my-account-account-info')->with(['user' => $user, 'customer' => $customer]);
        }

        return view('not-authorized');
        


    }

    #display account info page if logged in
    public function showAccount(User $user) 
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $address = $user->address();
            
            return view('my-account')->with(['user' =>  $user, 'address' => $address]);
        }
        
        return view('not-authorized');

        
    }

    # Display password change form if authorized (logged in)
    public function showChangePassword() 
    {
        if (Auth::check()) 
        {
            return view('/change-password');
        }
        return view('not-authorized');
    }

    public function changePassword(Request $request) 
    {
        
        # Do all the work if the user is logged in
        if (Auth::check()) 
        {
            $this->validate(request(), [
                'old_password' => 'required',
                'password' => 'required|confirmed',
            ]);

            $request_data = $request->all();
        
            # Get new password and hash it
            $current_password = Auth::user()->password;
            $current_psw_hashed = Hash::make($current_password);

            
            # If old password matches the password from input, then it's OK to change it to new one
            if(Hash::check($request->get('old_password'), Auth::user()->password))
            {
                $user_id = Auth::user()->id;
                $user = User::find($user_id);
                $user->password = bcrypt(request('password_confirmation'));
                $user->save();

                //dump($user);

                auth()->logout();
                // log out the user and prompt login form again with new password
                //return redirect()->back()->with("success","Password changed successfully !");
                return 'ok';
            } 
            else 
            {
                return 'error';    
            }  
        }

        return view('not-authorized');
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    # edit customer info on acount-acount-info-edit page
     public function update(Request $request, Customer $customer)
    {
        
        # Validate input request
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|exists:users',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        # Merge first and last name
        $name = request('firstname') . " " . request('lastname');

        # Update user DB with new data
        App\User::where('id', Auth::id())->update(['name' => $name, 'email' => request('email')]);

        # Update customer DB with new data
        App\Customer::where('user_id', Auth::id())->update(['firstname' => request('firstname'), 'lastname' => request('lastname'), 
                            'date_of_birth' => request('date_of_birth'), 'phone' => request('phone'), 'gender' => request('gender')]);

        return redirect('my-account-account-info');


    }


}
