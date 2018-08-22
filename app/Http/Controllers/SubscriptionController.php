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
        $this->validate(request(), [
            'email' => 'required|email|unique:subscribers',
            //'gender' => 'required',
        ]);

        $subsrciber = Subscriber::create(request(['email', 'gender']));

        $user = User::where('email', request('email'))->firstOrFail();
        $user_id = $user->id;
        if ($user) {
            $customer = Customer::where('user_id', $user_id)->update(array('subscribed' =>  true));
            //dd($user, $customer);
        }
        
        //return 'error';

        return redirect('/');
    }
}
