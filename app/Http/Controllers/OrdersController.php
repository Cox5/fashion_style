<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Order;
use App\OrderProduct;
Use App\Product;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) 
        {
            return view('my-account-orders');
        }

        return view('not-authorized');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        # Get user_id for logged in user
        if (Auth::check()) 
        {
            $user_id = Auth::id();
        } 
        else 
        {
            return view('not-authorized');
        }

        # Get all orders from current user
        $orders = Order::where('user_id', Auth::id())->get();
        
        return view('my-account-orders')->with('orders', $orders);

    }

}
