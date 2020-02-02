@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach($posts as $post)
        <div class="jumbotron vertical-center ">
            <div class="row row-content align-items-center">
                <div class="col col-sm order-sm-first col-md">
                    <div class="media">
                        <div class="col-md-4 col-sm-4">
                            <img style="width: 100%" class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
{{--                        <img class="d-flex mr-3 img-thumbnail align-self-center" src="/storage/cover_images/{{$post->cover_image}}">--}}
                        <div class="media-body">
                            <h2 class="mt-0"><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h2>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            <p class="d-none d-sm-block">{{$post->body}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}

    @else
        <p>No posts found</p>
    @endif
@stop
