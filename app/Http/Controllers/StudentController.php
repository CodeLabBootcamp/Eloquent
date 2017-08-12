<?php

namespace App\Http\Controllers;

use App\Level;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAll(){
    	$students = Student::all();
        $teachers = Teacher::all();

    	return view('students.all',compact('students','teachers'));
    }

    public function getAddForm(){



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

















