<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('schedules')->insert([
    		'reservation_time' => '11-12',

    	]);   
    	DB::table('schedules')->insert([
    		'reservation_time' => '12-13',
    	]); 
    	DB::table('schedules')->insert([
    		'reservation_time' => '13-14',

    	]);   
    	DB::table('schedules')->insert([
    		'reservation_time' => '14-15',
    	]);
    	DB::table('schedules')->insert([
    		'reservation_time' => '15-16',

    	]);   
    	DB::table('schedules')->insert([
    		'reservation_time' => '16-17',
    	]);

    	DB::table('schedules')->insert([
    		'reservation_time' => '17-18',

    	]);   
    	DB::table('schedules')->insert([
    		'reservation_time' => '18-19',
    	]);
    	DB::table('schedules')->insert([
    		'reservation_time' => '19-20',
    	]);
    	DB::table('schedules')->insert([
    		'reservation_time' => '20-21',
    	]);
    	DB::table('schedules')->insert([
    		'reservation_time' => '21-22',
    	]);
    	DB::table('schedules')->insert([
    		'reservation_time' => '22-23',
    	]);

    }
}
