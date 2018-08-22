<?php

namespace App\Http\Controllers;

use Auth;
use App\Order;
use \Cart as Cart;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = null;
        $customer = null;
        $subscribed = false;

        if (Auth::check())
        {
            $user = Auth::user();
            $customer = $user->customer();
            if ($user->customer->subscribed) {
                $subscribed = true;
            }
        }
            
        //dd($subscribed);

        //$tax = config('cart.tax') / 100;
        $discount = session()->has('coupon') ? session()->get('coupon')['discount'] : 0;
        $subscribe_discount = $subscribed ? '10%' : '0';
        $code = session()->has('coupon') ? session()->get('coupon')['name'] : null;
        $newSubtotal = (Cart::subtotal() - $discount);
        if ($subscribed) {
            $newSubtotal = $newSubtotal * 0.9;
        } 
        //$newSubtotal = $subscribed ? $newSubtotal * 0.9 : newSubtotal;
        //$newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal; //* (1 + $tax);

        return view('checkout-page')->with([
            //'tax' => $tax,
            'discount' => $discount,
            'code' => $code,
            'newSubtotal' => $newSubtotal,
            //'newTax' => $newTax,
            'newTotal' => $newTotal,
            'user' => $user,
            'customer' => $customer,
            'subscribe_discount' => $subscribe_discount,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null, // if logged in, store ID, if not, store NULL
            'phone' => $request->phone,
            'shipping_address' => $request->shipping_address,
            'shipping_address_apt' => $request->shipping_address_apt,
            'shipping_city' => $request->shipping_city,
            'shipping_zip' => $request->shipping_city,
            'shipping_country' => $request->country,
            'discount' => $this->getCartInfo()->get('discount'),
            'tracking_number' => $this->generateTrackingNumber(),
            'discount_code' => $this->getCartInfo()->get('discount_code'),
            'subtotal' => $this->getCartInfo()->get('newSubtotal'),
            'tax' => $this->getCartInfo()->get('newTax'),
            'total' => $this->getCartInfo()->get('newTotal'),
            'error' => null,

        ]);

        // Insert into order_product table
        foreach(Cart::content() as $item ) 
        {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        # Mailtrap testing, currently not working...
        //Mail::send(new OrderPlaced);

        // On success, remove all items from cart and remove coupon session
        Cart::instance('default')->destroy();
        session()->forget('coupon');

        return redirect('thank-you-page');

    }

    # Generate unique tracking number for a specific order
    private function generateTrackingNumber()
    {
        $tracking_number = mt_rand(100000, 999999);

        # If tr_number already exists, generate a new one
        if($this->checkIfExists($tracking_number)) {
            return generateTrackingNumber();
        }

        return $tracking_number;
    }

    # Check if the tracking number already exists in database
    private function checkIfExists($number) 
    {
        return Order::where('tracking_number', $number)->exists();
    }

    private function getCartInfo()
    {
        $tax = config('cart.tax') / 100;
        $discount = session()->has('coupon') ? session()->get('coupon')['discount'] : 0;
        $subscriber_discount = 
        $code = session()->has('coupon') ? session()->get('coupon')['name'] : null;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);

        return collect([
            'tax' => $tax,
            'discount' => $discount,
            'discount_code' => $code,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
    }

}
