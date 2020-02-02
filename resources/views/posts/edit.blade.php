@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'post','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=> 'form-control', 'placeholder'=>'Title of the post','autofocus' ])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['class'=> 'form-control', 'placeholder'=>'Body of the post' ])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT') }}
        <div class="form-group">
            {{Form::submit('Submit',['class'=>'btn btn-outline-primary'])}}
            <div class="btn">
                <a href="/posts/{{$post->id}}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>

    {!! Form::close() !!}

@stop


