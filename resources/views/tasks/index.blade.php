@extends('layout.header_admin')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if (Session('message'))
                    <div class="alert alert-success"> {{ Session::get('message') }}</div>
                    @endif
                <div class="panel panel-default">
                    <div class="panel-heading">admin
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            @foreach($menus as $task)
                                <tr>
                                    <td class="col-md-2"><img height="50" width="50" src="{{ $task->image }}"></td>
                                    <td class="col-md-6">{{ $task->name }}</td>

                                    <td class="col-md-2">
                                        {!! Form::open(array('route'=>['task.destroy', $task->id ],'method'=>'DELETE')) !!}
                                    {{ link_to_route('task.edit','Edit', [$task->id], ['class'=>'btn btn-primary']) }} |
                                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                                @endforeach

                            </table>

                        </div>

                    </div>

                  {{ link_to_route('task.create','Add new task', null, ['class'=>'btn btn-success']) }}

                </div>

            </div>
        </div>


    </div>
@endsection
