<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentapiController extends Controller
{
    public function index(){
      return response()->json(Student::all(),200);
  }
  public function store(){
    request()->validate([
        'name'=>'required',
        'rollno'=>'required',
        'department'=>'required',
        'address'=>'required',
    ]);

    $student= Student::create([
        'name' => request('name'),
        'roll_no' => request('rollno'),
        'department' => request('department'),
        'address' => request('address'),

    ]);
    $student->save();
    return response()->json($student,201);
  }
  public function viewStudentById($id){
    return Student::find($id);
  }
}
