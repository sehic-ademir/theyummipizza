<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
   protected $fillable = ['user_id', 'pizza_id', 'order_id'];

}
