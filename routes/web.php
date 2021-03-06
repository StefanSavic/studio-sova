<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainHomeController@index');
Route::get('/admin', 'AdminController@index');

Route::get('admin/schedules/edit','ScheduleController@edit');	
Route::patch('admin/schedules','ScheduleController@update');	

Route::resource('admin/posts','PostsController');
