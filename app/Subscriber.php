<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    // allow this field to be editable in db
    protected $fillable = ['email', 'gender'];
}
