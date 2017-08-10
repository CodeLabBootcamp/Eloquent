<?php

namespace App\Http\Controllers;

use App\Level;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAll(){
    	$students = Student::all();

    	$students = Student::find(1);
    	dd($students->level->students);


    	return view('students.all',compact('students'));
    }

    public function getAddForm(){

    	$student = Student::find(2);
    	$teachers = $student->teachers->where('name','like','%' . 'a' . '%');
dd($teachers);
	    $level = Level::find(2);
    	$student->level_id = $level->id;
	    $student->save();

    	return view('students.add');
    }
    public function restoreStudent($id){
    	$student = Student::onlyTrashed()->find($id);
    	$student->restore();
    }
	public function addStudent(Request $request){


    	$student = new Student;

    	$student->first_name = $request->first_name;

    	$student->last_name = "$request->last_name";

    	$student->grade = $request->grade;

    	$student->save();

    return $student->id;
    }

	public function deleteStudent(Student $student) {
		$student->delete();
		return "Deleted";

    }
}

















