<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class StudentController extends Controller
{
    public function index(){
        return view('add_student');
    }
    public function viewStudent(){
        $student = DB::select('select * from students');
        return view('view_student',['students'=>$student]);
    }
    public function create(Request $request){
        $rules = [
			'name' => 'required|string|min:3|max:255',
			'rollno' => 'required',
			'department' => 'required|string|max:255',
            'address'=>'required',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('/add')
			->withInput()
			->withErrors($validator);
		}
		else{
           
			
				$student = new Student;
                $student->name = $request->name;
                $student->roll_no = $request->rollno;
                $student->department = $request->department;
                 $student->address = $request->address;
                $student->save();
				return redirect('/add')->with('status',"Insert successfully");
                
			
		}
        
       

		
    }
}
