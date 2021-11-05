<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PaymentHistory;
use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectChoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function Payment($stud_id){
//        $subj_data=Subject::find($subj_id);
            $stud_data=$stud_id;
            $amountDue=Transaction::where('student_id','=',$stud_data)->get('amount_due');

//dd($amountDue);
//        return view('Payment.AddPayment',compact('stud_data','subj_data'));
        return view('Payment.AddPayment',compact('stud_data','amountDue'));
    }

    public function AddPayment(Request $request){
//       obtain record and capture cost the access via loop method

//        $data = Subject::where('id','=',$request->subj_id)->get('cost_amt');
//        foreach($data as $info){
//            $subjCost = $info->cost_amt;
//        }

        $check= Transaction::where('student_id','=',$request->stud_id)->get('amount_paid');
        $check = $check[0]->amount_paid;
//        dd($check);
        if($check==0)
        {
            $amountDue=Transaction::where('student_id','=',$request->stud_id)->get('amount_due');
            foreach ($amountDue as $amount)
            {
               $subjCost= $amount->amount_due;
            }
            $amountPaid = $request->amt_paid;
            $stud_balance = $subjCost - $amountPaid;

            Payment::create([
                'student_id'=> $request->stud_id,
                'subject_id' => '1',
                'amount_paid' => $request->amt_paid,
                'balance_amt' => $stud_balance,
                'date_paid' => date('Y-m-d')
            ]);

            Transaction::where('student_id','=',$request->stud_id)->update([
                'amount_paid' => $amountPaid,
                'balance_amt' => $stud_balance,
            ]);
        }
        else{



//       calculate student's balance
        $prevPaid=Transaction::where('student_id','=',$request->stud_id)->get('amount_paid');
        $prevPaid = $prevPaid[0]->amount_paid;

        $prevBal=Transaction::where('student_id','=',$request->stud_id)->get('balance_amt');
        $prevBal = $prevBal[0]->balance_amt;

        $amountPaid =  $request->amt_paid;
        $totalPaid =  $amountPaid + $prevPaid;
        $stud_bal = $prevBal - $amountPaid;

            $subject_ids = SubjectChoice::where('student_id', '=', $request->stud_id)->where('status', '=', 'approved')->get('subject_id');
            $subIDs=array();
            foreach ($subject_ids as $subject_id) {
                $subIDs[]=$subject_id->subject_id;
            }
            $subIDs=implode(",",$subIDs);
//            dd($subIDs);

//        dd($stud_balance);
        Payment::create([
            'student_id'=> $request->stud_id,
            'subject_id' => 1,
            'amount_paid' => $request->amt_paid,
            'balance_amt' => $stud_bal,
            'date_paid' => date('Y-m-d')
        ]);

        PaymentHistory::create([
            'student_id'=> $request->stud_id,
//            'amount_paid' => $request->amt_paid,
            'date_paid'=> date('Y-m-d'),
            'description'=> 'payment confirmed',
        ]);

        Transaction::where('student_id','=',$request->stud_id)->update([
            'amount_paid' => $totalPaid,
            'balance_amt' => $stud_bal,
        ]);
    }
        return redirect()->route('ViewPayment');
    }

    public function ViewPayment(){
        $data=Student::all();
        return view('Transaction.ViewTransaction',compact('data'));
    }
    public function Report(){
        $data=Student::all();
        return view('Report.Report',compact('data'));
    }

    public function ViewReport(Request $request){
        $student_id=$request->student_id;
//    dd($student_id);
//        $student_id = $request->student_id;
        $subjects=SubjectChoice::where('student_id', '=', $student_id)->where('status', '=', 'approved')->with('subject')->get();
        $stds=Student::where('id',$student_id)->get();
        $tran=Transaction::where('student_id',$student_id)->first('amount_due');
        $tran = $tran->amount_due;
//        dd($tran);
        $info= Payment::where('student_id','=',$student_id)->get();

       return view('Report.ViewReport',compact('info','subjects','stds','tran'));
    }

    public function ViewStudentPayment(Request $request){
        $student_id=$request->student_id;
//    dd($student_id);
//        $student_id = $request->student_id;
        $info= Payment::where('student_id','=',$student_id)->get();

       return view('Transaction.ViewStudentTransaction',compact('info'));
    }
}
