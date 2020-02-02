@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>

    <div>
        {{$post->body}}
    </div>

    <hr>
    <small>Written in {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
                <div class=" col-sm-3 float-left">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
    {{--                <a href="/api/ocr" class="btn btn-info">Convert</a>--}}
                </div>
                <div class=" col-sm-3 float-left">
                    {!! Form::open(['action' => ['API\CgiController@ocr'],
                                    'method' => 'POST']) !!}
                    {{ Form::hidden("id",$post->id) }}
                    {{ Form::hidden('_method', 'POST') }}
                    {{ Form::submit('OCR', ['class' => 'btn btn-info']) }}
                    {!! Form::close() !!}
                </div>
                <div class=" col-sm-1 offset-5 float-left">
                {!! Form::open(['action' => ['PostsController@destroy',$post->id],
                                'method' => 'POST']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) }}
                {!! Form::close() !!}
                </div>
        @endif
    @endif
    <div class=" col-lg-12 btn pull-right">
    <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
    </div>
@stop

