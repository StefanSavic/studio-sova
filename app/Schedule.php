<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
   public $timestamps = false;
   protected $fillable = ['pon', 'uto', 'sre', 'cet', 'pet', 'sub'];
}
	