<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'phone', 'shipping_address', 'shipping_address_apt', 'shipping_city', 'shipping_zip', 'shipping_country',
        'discount', 'discount_code', 'subtotal', 'tax', 'total', 'tracking_number', 'payment_gateway', 'shipped', 'error'
    ];

    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function products() 
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
