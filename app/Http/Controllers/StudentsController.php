<?php
/**
 * Created by PhpStorm.
 * User: Hai
 * Date: 7/6/2016
 * Time: 17:15
 */

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function create()
    {
        $teacherId= \Auth::user()->id;
        return view("create",compact('teacherId'));
    }

    public function store(Request $request)
    {
        $dulieu_tu_input = $request->all();
        $student = new Student();
        $student->name = $dulieu_tu_input["name"];
        $student->teacher_id = $dulieu_tu_input["teacher_id"];
        $student->save();
        return redirect('home');
    }

    public function update(Request $request)
    {
        $dulieu_tu_input = $request->all();
        $student = Student::find($dulieu_tu_input["id"]);
        $student->name = $dulieu_tu_input["name"];
        $student->teacher_id = $dulieu_tu_input["teacher_id"];
        $student->save();
        return redirect('home');
    }
    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('home');
    }

}