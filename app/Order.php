<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'order', 'dish_id', 'quantity', 'status',
  ];

}
