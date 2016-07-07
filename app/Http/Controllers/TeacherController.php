<?php
/**
 * Created by PhpStorm.
 * User: Hai
 * Date: 7/6/2016
 * Time: 11:05
 */

namespace App\Http\Controllers;


use App\Student;
use App\Teacher;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{

//    public function showAllTeacher(){
//        $teacher=Teacher::all();
//        return view('welcome', ['users' => $teacher]);
//    }

    public function showAllStudentOfTeacher($id){
        $students = DB::table('student')
            ->where('teacher_id','=',$id)
            ->get();
        return view('welcome',compact('students'));
    }
}