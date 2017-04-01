<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Total;
use App\Place;

class total_controller extends Controller
{
  public function store (Request $request) {
    // $orders = Order::all();
    $dishes = DB::table('orders')
    ->join('menus', 'orders.dish_id', '=', 'menus.id')
    // ->join('places', 'places.id', '=', 'orders.order')
    ->where('order', '=', $request->order)
    ->get(array('name', 'quantity', 'price'));
    $order = Place::orderBy('id', 'desc')->first();
    return view ('total', compact(['dishes', 'order']));
  }

  public function totalorder(Request $request)
  {
    // $order = new Total;
    // $order->order_id = $request->order;
    // $order->save();
    Order::where('order', '=', request(['order']))->update(['status' => 1]);

    return redirect('/waiterplace');
  }
}
