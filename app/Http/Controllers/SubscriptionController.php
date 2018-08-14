<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriptionController extends Controller
{
    //
    public function store() 
    {
        $this->validate(request(), [
            'email' => 'required|email|unique:subscribers',
        ]);

        $subsrciber = Subscriber::create(request(['email', 'gender']));

        return redirect('/');
    }
}
