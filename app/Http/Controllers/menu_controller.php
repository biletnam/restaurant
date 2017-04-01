<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ingredient_menu;
use App\ingredient;
use App\menu;

class menu_controller extends Controller
{
    // public function menu (){
    // 	return view ('menu');
    // }
    public function menu ()
    {
      $ingredients = ingredient_menu::get(['menu_id','ingredient_id']);
      $names = ingredient::get(['id','ingredient']);
      $lists = menu::all();
      return view ('menu', compact(['lists', 'ingredients', 'names']));
    }
}
