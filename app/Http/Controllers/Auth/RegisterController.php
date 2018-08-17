<?php

namespace App\Http\Controllers\Auth;

use App\User;
Use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration $data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            // 'date_of_birth' => 'required',
            // 'phone' => 'required',
            // 'gender' => 'required',
            // 'bill_address' => 'required',
            // 'bill_city' => 'required',
            // 'bill_zip' => 'required',
            // 'bill_country' => 'required',
            // 'ship_address' => 'required',
            // 'ship_city' => 'required',
            // 'ship_zip' => 'required',
            // 'ship_country' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        dump($user);

        // split name from form to first and last name
        $fullName = explode(" ", $data['name']);
        $firstname = $fullName[0];
        $lastname = $fullName[1];

        // Add form data to customer table
        $customer = new Customer;

        $customer->user_id = $user->id;
        $customer->firstname = $firstname;
        $customer->lastname = $lastname;
        $customer->date_of_birth = $data['date_of_birth'];
        $customer->phone = $data['phone'];
        $customer->gender = $data['gender'];
        
        $customer->bill_address = $data['bill_address'];
        $customer->bill_city = $data['bill_city'];
        $customer->bill_zip = $data['bill_zip'];
        $customer->bill_country = $data['bill_country'];

        $customer->ship_address = $data['ship_address'];
        $customer->ship_city = $data['ship_city'];
        $customer->ship_zip = $data['ship_zip'];
        $customer->ship_country = $data['ship_country'];

        $customer->save();

        dump($customer);

        return redirect('/');

    }
}
