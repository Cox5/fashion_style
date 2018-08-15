<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use \Cart as Cart;
use Validator;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cart::add('192ao12', 'Product name test', 1, 9.99);
        // Cart::add('192ao12', 'Product name 2 test', 1, 9.99);

        return view('checkout-page-mybag');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($id, $product_name, $price);


        //Cart::add($id, $product_name, $price);
        Cart::add([
            'id' => request('id'), 
            'name' => request('product_name'), 
            'qty' => 1, 
            'price' => request('price'), 
            'options' => ['size' => 'large']
        ])->associate('App\Product');
        
        //Cart::add('1234', 'Product test name', 1, 9.99);

        //Cart::associate($cartItem->rowId, 'Product');
        

        //dd($cartItems);

        return view('checkout-page-mybag')->with('success_message', 'Item is added to your cart!');
        //return view('checkout-page-mybag');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cartItems = Cart::content();

        dd($cartItems);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed');
    }

    public function deleteCart()
    {
        Cart::destroy();

        return redirect('/product-overview');
    }
}
