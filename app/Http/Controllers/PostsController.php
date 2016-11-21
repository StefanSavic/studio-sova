<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PostRequest;



class PostsController extends Controller
{
   public function index()
   {
   	$posts = Post::latest()->get();
   	return view('posts.index',compact('posts'));
   }

   public function create()
   {
   	return view('posts.create');
   }

   public function store(Requests\PostRequest $request)
   {

     $post = Post::create($request->all());
     
     $post->save();

     return redirect('admin/posts');
   }

   public function edit($id)
   {

      $post = Post::findOrFail($id);

      return view('posts.edit',compact('post'));
   
   }

   public function update($id,postRequest $request)
   {

   $post = Post::findOrFail($id);

   $post->update($request->all());

   return redirect('posts');
   
   }

   public function destroy($id)
   {

   $post = Post::findOrFail($id);

   $post->delete($id);

   return redirect('admin/posts');
   
   }
}

