<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Place;

class cook_controller extends Controller
{
  public function cook ()
  {
    $orders = DB::table('orders')
    ->join('menus', 'orders.dish_id', '=', 'menus.id')
    ->where('status', '=', 1)
    ->get(['orders.id', 'order', 'name', 'quantity']);

    return view ('cook', compact('orders'));
  }


  public function store()
  {
    Order::where('id', '=', request(['done']))->update(['status' => 2]);

    return redirect('/cook');
  }
}
