<?php

namespace App\Http\Controllers;

use App\Schedule;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ScheduleRequest;

class SchedulesController extends Controller
{
	public function index()
	{	

		$schedule = Schedule::all();
		return view('scheduleAdmin',compact('schedule'));
	}

	public function store(Requests\ScheduleRequest $request)
	{	
		
	}

	public function update()
	{
		$schedule = Schedule::all();
		return redirect('/admin');

	}

// public function update($id,postRequest $request)
// 	{
// 		$post = post::findOrFail($id);

// 		$post->update($request->all());

// 		return redirect('posts');
// 	}

}