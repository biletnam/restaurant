<?php

namespace App\Http\Controllers;
use App\Http\Requests\TaskRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\menu;
use App\ingredient;
use DB;

//use App\snack;


class TaskController extends Controller
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
        //$snack=snack::all();
        $tasks=menu::all();

        return view('tasks.create', compact('ingridient','tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new menu;

            $data->name=Input::get('title');
            $data->price=Input::get('price');
            //$data->image=Input::get('image')
            $file=Input::file('image');
            $file->move(public_path().'/image', $file->getClientOriginalName());
            $data->image=$file->getClientOriginalName();
            $data->save();

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

        $datas = new ingredient;


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
    public function edit(menu $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $task)
    {



        if (Input::hasFile('image'))
        {
            $file=Input::file('image');
            $file->move(public_path().'/image', $file->getClientOriginalName());
            $task->image=$file->getClientOriginalName();
        }

        $task->Update($request->all());
        return redirect()->route('task.index')->with('message','Its OK');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('message','item has been delete successful');
    }
}
