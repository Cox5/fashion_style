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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        # Add product to Cart
        Cart::add([
            'id' => request('id'), 
            'name' => request('product_name'), 
            'qty' => 1, 
            'price' => request('price'), 
            'options' => ['size' => 'large']
        ])->associate('App\Product');

        return view('checkout-page-mybag')->with('success_message', 'Item is added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        # Debug action to show the current products in Cart
        $cartItems = Cart::content();

        dd($cartItems);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        # Remove the item from the Cart action
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed');
    }

    public function deleteCart()
    {
        # Action for removing all products from the cart
        Cart::destroy();

        return redirect('/product-overview');
    }
}
