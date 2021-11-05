<?php

namespace App\Http\Controllers;

use App\Models\SubjectChoice;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Http\Request;

class SubjectChoiceController extends Controller
{
    //
    public function SubjectChoice(){
        $students = Student::all();
        $subjects = Subject::all();
        return view('SubjectChoice.AddSubjectChoice',compact('students','subjects'));
    }

    public function AddSubjectChoice(Request $Request){
//dd($Request);
        SubjectChoice::create([
            'student_id' => $Request->stud_id,
            'subject_id' => $Request->sub_id,
//            'status' => $Request->stat,
            'year_of_exam' => $Request->yoe,
        ]);
        return redirect()->route('SubjectChoice')->with('Success','Subject Successfully Added');
    }

    public function ViewSubjectChoice(){
        $data = SubjectChoice::with('student','subject')->paginate(5);
//        dd($data);
        return view('SubjectChoice.ViewSubjectChoice',compact('data'));
    }

    public function ApproveSubjectChoice($id){
        SubjectChoice::find($id)->update([
            'status' => 'approved'
        ]);
        return redirect()->back();
    }

    public function DenySubjectChoice($id){
        SubjectChoice::find($id)->update([
            'status' => 'denied'
        ]);
        return redirect()->back();
    }

    public function EditSubjectChoice($id){
        $data=SubjectChoice::find($id);
        $subjects = Subject::all();
        $students = Student::all();
        return view('SubjectChoice.EditSubjectChoice',compact('data','subjects','students'));
    }

    public function UpdateSubjectChoice(Request $Request){
//dd($Request);
        SubjectChoice::find($Request->id)->update([
            'student_id' => $Request->stud_id,
            'subject_id' => $Request->sub_id,
            'status' => $Request->stat,
            'year_of_exam' => $Request->yoe,
        ]);
        return redirect()->route('ViewSubjectChoice')->with('Success','Subject Successfully Added');
    }

}
