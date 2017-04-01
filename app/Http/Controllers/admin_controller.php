<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class admin_controller extends Controller
{
  public function admin()
  {
    return view ('admin');
  }

  public function menu (Request $request)
  {
    $this->validate($request, [
      'name'=> 'required|unique:menus',
      'price'=>'required',
      'category'=>'required',
      'weight'=>'required'
    ]);

    $user->title=Input::get('name');
    if (Input::hasFile('image'))
    {
      $file=Input::file('image');
      $file->move(public_path().'/', $file->getClientOriginalName());
      $user->name=$file->getClientOriginalName();
    }
    $user->save();

    $data=$request->all();
    $menu= new menu;
    $menu->fill($data);
    $menu->save();
    return redirect('/ingredient');
    // dump($menu);
  }

}
