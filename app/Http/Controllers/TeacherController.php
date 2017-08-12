<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function viewTeacher(Teacher $teacher)
    {
        $students = Student::all();

        return view('teachers.add',compact('teacher','students'));
    }

    public function addStudent($id)
    {
        dd(\request('student_id'));
        $teacher = Teacher::find($id);

        $teacher->students()->toggle(request('student_id'));

    }
}
