<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectChoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function Transaction(){
        $data=Student::all();
        return view('Transaction.AddTransaction',compact('data'));
    }

    public function AddTransaction(Request $request)
    {

        $stud_id = $request->stud_id;
        $subject_id=SubjectChoice::where('student_id','=',$stud_id)->where('status','=','approved')->get('subject_id');
        $data=Subject::find($subject_id);
        $check=Transaction::where('student_id','=',$stud_id)->get()->count();



//       $count=SubjectChoice::find(student_id)->count();
        $subject_ids = SubjectChoice::where('student_id', '=', $stud_id)->where('status', '=', 'approved')->get('subject_id');
        $yearOfExam = SubjectChoice::where('student_id', '=', $stud_id)->where('status', '=', 'approved')->get('year_of_exam');

        $yearOfExam=$yearOfExam[0]->year_of_exam;
//        dd($yearOfExam);

        //disect and get each subject Id to aid in search to get amount due
        $count = 0;
        foreach ($subject_ids as $sub_id) {
            $a[$count] = $sub_id->subject_id;
            $count = $count + 1;
        }
//Retrieve cost of subject using their subject ID
        $amount_due = 0;
        for ($x = 0; $x < $count; $x++) {
//           echo $a[$x];
            $costs = Subject::where('id', '=', $a[$x])->first('cost_amt');
            $amount_due = $amount_due + $costs->cost_amt;
        }
        if($check<1){
            Transaction::create([
                'student_id' => $request->stud_id,
                'amount_due' => $amount_due,
                'amount_paid' => 0,
                'balance_amt' => 0,
                'year_of_exam' => $yearOfExam,
            ]);

                $balance = Transaction::where('student_id','=',$request->stud_id)->first('balance_amt');
                $balance = $balance[0]->balance_amt;
                return view('Payment.ViewPayment',compact('data','stud_id','balance'));
        }
//        End of IF statement
        else{

            Transaction::where('student_id','=',$stud_id)->update([
                'amount_due' => $amount_due,
            ]);
//            return redirect()->route('Transaction');
//            return view('Payment.ViewPayment',compact('data','stud_id'));
            $balance = Transaction::where('student_id','=',$request->stud_id)->get('balance_amt');
//            dd($balance);
//            $balance = $balance[0]->balance_amt;
            return view('Payment.ViewPayment',compact('data','stud_id','balance','subject_id'));

        }

//        return view('Payment.ViewPayment',compact('data','stud_id'));
    }




//       $check=Transaction::where('id','=',$stud_id)->get()->count();
//       $subject_id=SubjectChoice::where('student_id','=',$stud_id)->where('status','=','approved')->get('subject_id');
//       $data=Subject::find($subject_id);
////        dd($data);
//        if($check<1){
//           return view('Payment.ViewPayment',compact('data','stud_id'));
//       }else{
////           $check=array();
//           echo "transaction for student exist";
//           return redirect()->route('AddTransaction');
//       }
//       return view('Transaction.ViewTransaction',compact('check'));
//        $data=SubjectChoice::with('');
//    }

}
