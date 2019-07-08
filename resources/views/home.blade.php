@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="float-md-right"><a href="/posts/create" class="btn btn-primary">Create Post</a></div>
                    <h3>Your Blog Posts</h3>
		            @if
	                    <table class="table table-striped">
	                        <tr>
	                            <th>Title</th>
	                            <th>Updated On</th>
	                            <th>Description</th>
	                            <th></th>
	                            <th></th>
	                        </tr>
	                        @foreach($posts as $post)
	                            <tr>
	                                <th>{{$post->title}}</th>
	                                <th>{{$post->updated_at}}</th>
	                                <th><div><button class="btn btn-primary">View</button></div></th>
	                                <th><div class="float-right" ><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </div></th>
	                                <th><div class="  float-right">
	                                        {!! Form::open(['action' => ['PostsController@destroy',$post->id],
	                                                        'method' => 'POST']) !!}
	                                        {{ Form::hidden('_method', 'DELETE') }}
	                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) }}
	                                        {!! Form::close() !!}
	                                    </div></th>
	
	                            </tr>
	                        @endforeach
                    	</table>
		      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
