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
		<!--container  -->
		<div class="container admin-container">
			<h1> Nova Obaveštenja</h1>
			
			<a href="{{action('PostsController@index')}}" class=" btn btn-primary">back</a>	

			<div id="app">
			{!! Form::open(['url' => 'posts','enctype'=>"multipart/form-data",'class' => 'forma']) !!}
				@include('posts.form',['submitButtonText' => 'Objavi'])
			{!! Form::close() !!}
			</div>  <!--/app -->
		</div><!--/ container -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
		<script>
			new Vue({
				el:'#app',
				data:{
					message:''
				}
			}); 
		</script>

	</body>
	</html>