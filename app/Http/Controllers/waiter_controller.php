<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\Place;
use App\menu;
use App\ingredient;
use App\ingredient_menu;

class waiter_controller extends Controller
{
  public function waiter ()
  {
    $ingredients = ingredient_menu::get(['menu_id','ingredient_id']);
    $names = ingredient::get(['id','ingredient']);
    $order = Place::orderBy('id', 'desc')->first();
    $lists = menu::all();
    return view ('waiter', compact(['order', 'lists', 'ingredients', 'names']));
  }

  public function store(Request $request)
  {
    $order = new Order;
    $order->order = $request->order;
    $order->dish_id = $request->dish;
    $order->quantity = $request->quantity;
    $order->save();

    return redirect('/waiter');
  }

  public function place ()
  {
    $orders = DB::table('orders')
    ->join('menus', 'orders.dish_id', '=', 'menus.id')
    ->where('status', '=', 2)
    ->get(['orders.id', 'order', 'name', 'quantity']);

    return view ('waiterplace', compact('orders'));
  }

  public function placestore(Request $request)
  {
    $place = new Place;
    $place->place = $request->place;
    $place->save();

    return redirect('/waiter');
  }
  public function archive(Request $request)
  {
    Order::where('id', '=', request(['archive']))->update(['status' => 3]);

    return redirect('/waiterplace');
  }
}
