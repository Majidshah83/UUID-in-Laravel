<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;
class StudentController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $student=new Student;
        $student->id=Str::uuid()->toString();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->save();
        dd('insert');

    }
    public function show()
    {
         $student=Student::all();
        return view('showdata',compact('student'));
    }
    public function getid($id)
    {
        $student=Student::where('id',$id)->first();
        return  $student;
    }
}