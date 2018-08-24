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
        # Request coupon code from coupons form on checkout-page
        $code = request('dsc');

        # Search for the coupon inside Coupons DB
        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon) 
        {
            return redirect()->route('checkout.index')->withErrors('Invalid coupon code!');
        }

        # If found, put the coupon into session
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
        # Action for removing the coupon from session
        session()->forget('coupon');

        return redirect()->route('checkout.index')->with('success_message', 'Coupon has been removed');
    }
}
