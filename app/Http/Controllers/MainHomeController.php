<?php

namespace App\Http\Controllers;

use App\Post;

use App\Schedule;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainHomeController extends Controller
{
    public function index(){
    	$posts = Post::latest()->get();

    	$schedules = Schedule::all();
    	
    	return view('welcome',compact(['posts','schedules']));
    }
}
