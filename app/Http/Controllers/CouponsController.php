<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use \Cart as Cart;

class CouponsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = request('dsc');

        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon) 
        {
            return redirect()->route('checkout.index')->withErrors('Invalid coupon code!');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been applied');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been removed');
    }
}
