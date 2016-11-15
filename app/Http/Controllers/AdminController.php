<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Schedule;

class AdminController extends Controller
{
    public function index(){
    	$schedules = Schedule::all();
    	return view('admin.index',compact('schedules'));
    }
}
