<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Student as StudentEloquent;

class StudentController extends Controller
{

    public function getStudentData($student_no){
        $student = StudentEloquent::where('no', $student_no)->firstOrFail();
        return View::make('student', [
            'student' => $student,
            'user' => $student->user,
            'score' => $student->score,
            'subject' => null
        ]);
    }

    public function getStudentScore($student_no,$subject=null){
        $student = StudentEloquent::where('no', $student_no)->firstOrFail();
        return View::make('student', [
            'student' => $student,
            'user' => $student->user,
            'score' => $student->score,
            'subject' => $subject
        ]);
    }
/*
    public function getStudentData($student_no){
        return View::make('student',[
            'student_no'=>$student_no,
            'subject'=>null
        ]);
    }

    public function getStudentScore($student_no, $subject = null)
    {
        return View::make('student', [
            'student_no' => $student_no,
            'subject' => $subject
        ]);
    }
 */
}
