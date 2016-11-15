<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_time');
            $table->integer('pon')->default(0);
            $table->integer('uto')->default(0);
            $table->integer('sre')->default(0);
            $table->integer('cet')->default(0);
            $table->integer('pet')->default(0);
            $table->integer('sub')->default(0);
            $table->integer('ned')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
