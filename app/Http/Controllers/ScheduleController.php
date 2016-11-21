<?php

namespace App\Http\Controllers;

use App\Schedule;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ScheduleRequest;

class ScheduleController extends Controller
{
	public function index()
	{	

		$schedule = Schedule::all();
		return view('scheduleAdmin',compact('schedule'));
	}

	public function edit()
	{
		$schedules = Schedule::all();

		return view('schedules.edit',compact('schedules'));
	}

	public function update(ScheduleRequest $request)
	{	
		$all = Schedule::all();
		foreach ($all as $s) {
			$s->pon = false;
			$s->uto = false;
			$s->sre = false;
			$s->cet = false;
			$s->cet = false;
			$s->pet = false;
			$s->sub = false;
			$s->ned = false;
			$s->save();
		}

		foreach($request->all() as $id => $schedule){

			if ($id == '_method' || $id == '_token') continue;

			$s = Schedule::firstOrCreate(["id" => $id]);
			$s->pon = isset($schedule['pon']) ? $schedule['pon'] : false;
			$s->uto = isset($schedule['uto']) ? $schedule['uto'] : false;
			$s->sre = isset($schedule['sre']) ? $schedule['sre'] : false;
			$s->cet = isset($schedule['cet']) ? $schedule['cet'] : false;
			$s->pet = isset($schedule['pet']) ? $schedule['pet'] : false;
			$s->sub = isset($schedule['sub']) ? $schedule['sub'] : false;
			$s->ned = isset($schedule['ned']) ? $schedule['ned'] : false;
			$s->save();
		}

		return redirect('admin');
	}
}