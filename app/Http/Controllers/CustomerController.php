<?php

namespace App\Http\Controllers;

use App\Customer;
use Auth;
use App\User;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check()) 
        {
            $user = Auth::user();
            $customer = $user->customer();

            return view('my-account-account-info-edit')->with(['user' => $user, 'customer' => $customer]);
        }

        return view('not-authorized');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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
            $customer = $user->customer();

            return view('my-account')->with(['user' => $user, 'customer' => $customer]);
        }
        
        return view('not-authorized');

        
    }

    #display password change form if authorized (logged in)
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
        if (Auth::check()) 
        {
            $this->validate(request(), [
                'old_password' => 'required',
                'password' => 'required|confirmed',
            ]);

            $request_data = $request->all();
            dump($request->all());
        

            $current_password = Auth::user()->password;
            $current_psw_hashed = Hash::make($current_password);
            //$new_password = bcrypt(request('password'));

            dump($current_password);
            if(Hash::check($request->get('old_password'), Auth::user()->password))
            {
                $user_id = Auth::user()->id;
                $user = User::find($user_id);
                $user->password = bcrypt(request('password_confirmation'));
                $user->save();

                dump($user);

                auth()->logout();
                // log out the user and prompt login form again with new password
                return 'ok';
            } 
            else 
            {
                return 'error';    
            }
            
        }

        return view('not-authorized');

        //return redirect()->back()->with("success","Password changed successfully !");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //


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
        //

        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|exists:users',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        //dump($request->all());


        $name = request('firstname') . " " . request('lastname');

        //dump($name);

        App\User::where('id', Auth::id())->update(['name' => $name, 'email' => request('email')]);

        App\Customer::where('user_id', Auth::id())->update(['firstname' => request('firstname'), 'lastname' => request('lastname'), 
                            'date_of_birth' => request('date_of_birth'), 'phone' => request('phone'), 'gender' => request('gender')]);

        return redirect('my-account-account-info');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

}
