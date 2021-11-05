<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function Subject(){
        return view('Subject.AddSubject');
    }

    public function AddSubject(Request $Request){
//dd($Request);
        Subject::create([
            'subject_nm' => $Request->sub,
            'cost_amt' => $Request->amt,
        ]);
        return view('Subject.AddSubject')->with('Success','Subject Successfully Added');
    }

    public function ViewSubject(){
        $data = Subject::all();
//        dd($data);
        return view('Subject.ViewSubject',compact('data'));
    }

    public function EditSubject($id){
        $info = Subject::find($id);
        return view('Subject.EditSubject',compact('info'));
    }

    public function UpdateSubject(Request $Request){
//dd($Request);
        Subject::find($Request->id)->update([
            'subject_nm' => $Request->sub,
            'cost_amt' => $Request->amt,
        ]);
        return redirect()->route('ViewSubject')->with('Success','Subject Successfully Added');
    }
}
