@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>

    <hr>
    <small>Written in {{$post->created_at}}</small>
    <hr>
    <div class=" float-left">
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
    </div>
    <div class="  float-right">
    {!! Form::open(['action' => ['PostsController@destroy',$post->id],
                    'method' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) }}
    {!! Form::close() !!}
    </div>
    <div class=" col-lg-12 btn pull-right">
    <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
    </div>
@stop

