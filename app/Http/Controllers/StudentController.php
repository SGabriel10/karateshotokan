<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $res){
        $student = new Student;
        $student->name = $res ->input('name');
        $student->course = $res ->input('course');
        $student->email = $res ->input('email');
        $student->phone = $res ->input('phone');
        $student->save();
        return response()->json([
            'status'=>200,
            'message'=>'Student added Succesfully'
        ]);
    }
}
