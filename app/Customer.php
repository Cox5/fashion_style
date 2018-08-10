<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // A customer is related to one user
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
