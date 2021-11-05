<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function Student(){
        return view('Student.AddStudent');
    }

    public function AddStudent(Request $Request){
//dd($Request);
        Student::create([
            'frst_nm' => $Request->fn,
            'last_nm' => $Request->ln,
            'dob' => $Request->dob,
            'class' => $Request->class,
            'phone_nbr' => $Request->num,
            'email_addr' => $Request->email,
            'gender' => $Request->gender,
        ]);
        return view('Student.AddStudent')->with('Success','Student Successfully Added');
    }

    public function ViewStudent(){
        $data = Student::paginate(5);
//        dd($data);
        return view('Student.ViewStudent',compact('data'));
    }

    public function EditStudent($id){
        $info = Student::find($id);
        return view('Student.EditStudent',compact('info'));
    }

    public function UpdateStudent(Request $Request){
//dd($Request);
        Student::find($Request->id)->update([
            'frst_nm' => $Request->fn,
            'last_nm' => $Request->ln,
            'dob' => $Request->dob,
            'class' => $Request->class,
            'phone_nbr' => $Request->num,
            'email_addr' => $Request->email,
            'gender' => $Request->gender,
        ]);
        return redirect()->route('ViewStudent')->with('Success','Student Successfully Added');
    }
}
