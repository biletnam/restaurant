<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\ingredient;
class ingredient_controller extends Controller
{

	public function ingredient (){
    	return view ('ingredient');
    }

    public function menu (Request $request){
    	$this->validate($request,
    		['ingredient'=> 'required|unique:ingredients']);
    	 $data=$request->all();
    	 $ingredient= new ingredient;
    	 $ingredient->fill($data);
    	 $ingredient->save();
    	 return redirect('/ingredient');
    	 // dump($data);
    }

    public function ingredient_load (){
    	$ingredient=ingredient::select('id','ingredient')->get();
    	return view ('ingredient')->with(['ingredient' => $ingredient]);
    }

    public function menuIngredientStore (){
    	$last=menu::select('id')->orderBy('id','desc')->first();

    }

   
}
