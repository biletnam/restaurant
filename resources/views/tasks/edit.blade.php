@extends('layout.header_admin')
@section('contents')
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Update
                        <div class="panel-body">
                            {!! Form::model($task, array('route' =>['task.update',$task->id],'method'=>'PUT')) !!}
                            <div class="form-group">
                                {!! Form::label('title','Enter title') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('price','Enter price') !!}
                                {!! Form::text('price',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('image','Select file') !!}
                                {!! Form::file('image',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">

                                {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
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
