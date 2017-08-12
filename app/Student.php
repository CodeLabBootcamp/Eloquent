<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model {

	use SoftDeletes;

	public function getFullNameAttribute() {
		return $this->first_name . " " . $this->last_name;
	}

	public function getGradeStringAttribute() {
		return ( $this->grade > 10 ) ? "Greater than 10" : "Less than 10";
	}


	public function level(){
		return $this->belongsTo(Level::Class);
	}

	public function teachers(){
		return $this->belongsToMany(Teacher::Class,'students_teachers','student_id');
	}

    public function scores()
    {
        return $this->hasMany(Score::class,'student_id','id');
    }
}























