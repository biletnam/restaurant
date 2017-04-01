<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\menu;
use App\ingredient;
use DB;
use App\snack;


class NewController extends Controller
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
        $ingridient=ingredient::all();
      //  $snack=snack::all();
        return view('tasks.create', compact('ingridient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data=new task;
        $datas=new ingredient;


        $datas->ingredient=Input::get('ingridient');

        $datas->save();



        return redirect()->route('task.index')->with('message','Item has been added susccessfuly');
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


        $datas->ingredient = Input::get('ingridient');
      //  $datas->id_snack = Input::get('snack');

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
    public function edit(menu $menus)
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
    public function update(Request $request, menu $menus)
    {
        if (Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move(public_path().'/image', $file->getClientOriginalName());
            $menu->name=$file->getClientOriginalName();
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
    public function destroy(menu $menus)
    {
        $menus->delete();
        return redirect()->route('task.index')->with('message','item has been delete successful');
    }
}
