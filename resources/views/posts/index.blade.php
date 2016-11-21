@extends('layouts.admin',[$var = 'Objave'])

@section('content')

@foreach($posts as $post)
<article class="row margin-reset">
	<div class="col-md-9">
		<h2>
			<a class="yellow" href="{{ url('/admin/posts',$post->id) }}">{{$post->title}}</a>
		</h2>
		<span>{{$post->created_at}}</span>
		<p>{{$post->body}}</p>
		@if($post->image)
		<img src="/uploaded/{{$post->image}}" alt="{{$post->image}}">
		@endif
	</div>
	<div class="col-md-3 btn-wrapper">
		<a href="{{action('PostsController@edit',$post->id)}}" class="btn btn-yellow">Izmeni</a>
		{!! Form::open(['method' => 'DELETE','action' => ['PostsController@destroy',$post->id]]) !!}
		{!! Form::submit('Obriši', ['class' => 'btn btn-danger btn-delete']) !!}
		{!! Form::close() !!}
	</div>
</article>
@endforeach

@stop
