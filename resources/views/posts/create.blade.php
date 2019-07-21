@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=> 'form-control', 'placeholder'=>'Title of the post','autofocus' ])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['class'=> 'form-control', 'placeholder'=>'Body of the post' ])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-outline-primary'])}}
    {!! Form::close() !!}

@stop

