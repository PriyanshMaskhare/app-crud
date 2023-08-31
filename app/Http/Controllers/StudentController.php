<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        $Students['Student'] = Student::all(); 
        return view('create',$Students);
    }

    public function store(Request $request){

        $data = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'course'=>'required',
            'address'=>'required',
        ]);
        $newStudent = Student::create($data);
        return redirect(route('student.create'))->with('success','Record inserted successfully');
    }

    public function edit(Student $student){
           
        return view('edit',['student'=>$student]);
    }

    public function update(Student $student,Request $request){
         
        $data = $request->validate([
            'name'=>'required',
            'age'=>'required|numeric',
            'course'=>'required',
            'address'=>'required',
        ]);
        $student->update($data);
        return redirect(route('student.create'))->with('success','Student record updated successfully');
    }

    public function delete(Student $student){
              $student->delete();
              return redirect(route('student.create'))->with('success','Student record deleted successfully');
    }
}
