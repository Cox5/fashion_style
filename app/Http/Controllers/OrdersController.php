<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Order;
use App\OrderProduct;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
Use App\Product;
use App\Customer;

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

    public function pdfview(Request $request)
    {

        $order = Order::where('user_id', Auth::id())->first();
        $user = $order->customer();
        //view()->share('items', $order);

        //if($request->has('download')){
        $pdf = PDF::loadView('pdfview', compact('order', 'user'));
        return $pdf->download('pdfview.pdf');
        //}


        //return view('pdfview');
    }

}
