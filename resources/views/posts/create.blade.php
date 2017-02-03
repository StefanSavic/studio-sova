@extends('layouts.admin',[$var ='Nova Objava'])

@section('content')	
	{!! Form::open(['url' => 'admin/posts','enctype'=>"multipart/form-data"]) !!}
	@include('posts.form',['submitButtonText' => 'Objavi'])
	{!! Form::close() !!}
@include ('errors.list')
@stop



