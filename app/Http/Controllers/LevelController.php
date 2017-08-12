<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use App\Student;

class LevelController extends Controller
{
    public function getLevels()
    {
//        return Student::with('scores','level')->get();
        return Level::with('students')->get();
    }
}
