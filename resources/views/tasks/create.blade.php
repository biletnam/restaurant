@extends('layout.header_admin')
@section('contents')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">admin
                        <div class="panel-body">
                            {!! Form::open(['route' => 'task.store','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                                {!! Form::label('title','Enter title') !!}
                                {!! Form::text('title',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('price','Enter price') !!}
                                {!! Form::text('price',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">

                                <input type="file" name="image"><br/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            </div>

                            <div class="form-group">

                                {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
<br>
<br>
<br>
                            {!! Form::open(['route' => 'taskadd.store']) !!}


                            <div class="form-group">
                                {!! Form::label('ingridient','Інгредієнти') !!}
                                {!! Form::text('ingridient',null,['class'=>'form-control']) !!}
                            </div>



                            <div class="form-group">
                                @foreach($ingridient as $ingridients)
                                    {!! Form::checkbox('ingr[]',$ingridients->id, null ,['class'=>'field']) !!}
                                    {{   $ingridients->ingredient }}
                                @endforeach
                            </div>
                            <div class="form-group">

                                {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        <br>
                        <br>
                        <br>
                        <br>
                             {!! Form::open(['route' => 'menu_ingridient.store']) !!}

                            <div class="form-group">
                                {!! Form::label('menu','Назва страви') !!}
                                <select name="menu" class="custom-select" >
                                    <option value="0" disabled="true" selected="true">-Виберіть меню-</option>
                                    @foreach($tasks as $task)
                                        <option value="{{ $task->id }}">{{ $task->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                @foreach($ingridient as $ingridients)
                                    {!! Form::checkbox('ingr[]',$ingridients->id, null ,['class'=>'field']) !!}
                                    {{   $ingridients->ingredient }}
                                @endforeach
                            </div>



                            <div class="form-group">

                                {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                        @if(count($errors))
                            <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                              <li> {{ $error }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>

                </div>

            </div>
        </div>


    </div>
@endsection
