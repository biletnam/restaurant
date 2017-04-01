<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ingredient_menu;
use App\ingredient;
use DB;
use App\menu;

class menu_ingridientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $menus=menu::all();

      return view('tasks.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas=new ingredient_menu;
          $data=new ingredient_menu;
        //   $datas=new ingridient;


      //  $data->menu_id=Input::get('menu');
       $datas=Input::get('ingr');
       $data=Input::get('menu');

                  foreach ($datas as $dada)       {
                DB::insert("INSERT INTO `ingredient_menus` (`menu_id`,`ingredient_id`) VALUES (?,?)", [$data, $dada]);


                 }
                    return redirect()->route('task.create')->with('message','Item has been added susccessfuly');
                  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add (Request $request)
    {

        $datas = new ingridient;


        $datas->ingridient = Input::get('ingridient');




        $datas->save();
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        return view('tasks.edit',compact('menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        if (Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move(public_path().'/image', $file->getClientOriginalName());
            $menu->image=$file->getClientOriginalName();
        }

        $menu->Update($request->all());
        return redirect()->route('task.index')->with('message','Its OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        $menu->delete();
        return redirect()->route('task.index')->with('message','item has been delete successful');
    }
}
