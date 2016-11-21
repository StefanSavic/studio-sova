@extends('layouts.admin',[$var = 'Izmeni : ' .  $post->title ])

@section('content')

{!! Form::model($post,['method'=>'PATCH', 'action' => ['PostsController@update',$post->id]]) !!}
@include('posts.form',['submitButtonText' => 'Update Post'])
{!! Form::close() !!}

@stop



