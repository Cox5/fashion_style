<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Subscriber;
use App\User;
use App\Customer;

class SubscriptionController extends Controller
{
    //
    public function store() 
    {
        # Validate email given from form
        $this->validate(request(), [
            'email' => 'required|email|unique:subscribers',
            //'gender' => 'required',
        ]);

        # Create and save the record to DB
        $subsrciber = Subscriber::create(request(['email', 'gender']));

        # If email exists in users DB, allow him 10% discount by setting the 'subscribed' field to true
        $user = User::where('email', request('email'))->firstOrFail();
        $user_id = $user->id;
        if ($user) {
            $customer = Customer::where('user_id', $user_id)->update(array('subscribed' =>  true));
        }

        return redirect('/');
    }
}
