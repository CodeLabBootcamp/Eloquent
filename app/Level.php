<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	public function students(){
		return $this->hasMany(Student::Class,'level_id','id')->with('scores');
	}
}
