	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<link rel="stylesheet" href="/css/app.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body class="admin">
	<div class="container">
			<h1>Edit :{!! $post->title !!} </h1>
	
	{!! Form::model($post,['method'=>'PATCH', 'action' => ['PostsController@update',$post->id]]) !!}
		@include('posts.form',['submitButtonText' => 'Update Post'])
	{!! Form::close() !!}
	<a href="{{ url('/posts')}}" class="btn btn-success">back</a>
	</div>



	</body>
	</html>