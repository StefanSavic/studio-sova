<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body class="admin">
	<div class="container">
		<a href="{{action('PostsController@create')}}" class=" btn btn-primary">Create New Post</a>

		</hr>
		@foreach($posts as $post)
		<article class='adminBlog'>
			<h2 class="text-center text-capitalize">
				{{$post->title}}
			</h2>
			<span class="text-center">{{$post->created_at}}</span>
			<p class="text-center">{{$post->body}}</p>
			<a href="{{action('PostsController@edit',$post->id)}}">Edit</a>
		</article>
		@endforeach	
	</div>
</body>
</html>