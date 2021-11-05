<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/student",'\App\Http\Controllers\StudentController@Student')->name("Student");
Route::post("/add/student",'\App\Http\Controllers\StudentController@AddStudent')->name("AddStudent");
Route::get("/view/student",'\App\Http\Controllers\StudentController@ViewStudent')->name("ViewStudent");
Route::get("/edit/student/{id?}",'\App\Http\Controllers\StudentController@EditStudent')->name("EditStudent");
Route::post("/update/student/",'\App\Http\Controllers\StudentController@UpdateStudent')->name("UpdateStudent");

Route::get("/subject",'\App\Http\Controllers\SubjectController@Subject')->name("Subject");
Route::post("/add/subject",'\App\Http\Controllers\SubjectController@AddSubject')->name("AddSubject");
Route::get("/view/subject",'\App\Http\Controllers\SubjectController@ViewSubject')->name("ViewSubject");
Route::get("/edit/subject/{id?}",'\App\Http\Controllers\SubjectController@EditSubject')->name("EditSubject");
Route::post("/update/subject/",'\App\Http\Controllers\SubjectController@UpdateSubject')->name("UpdateSubject");

Route::get("/subjectchoice",'\App\Http\Controllers\SubjectChoiceController@SubjectChoice')->name("SubjectChoice");
Route::post("/add/subjectchoice",'\App\Http\Controllers\SubjectChoiceController@AddSubjectChoice')->name("AddSubjectChoice");
Route::get("/view/subjectchoice",'\App\Http\Controllers\SubjectChoiceController@ViewSubjectChoice')->name("ViewSubjectChoice");
Route::get("/approve/subjectchoice/{id?}",'\App\Http\Controllers\SubjectChoiceController@ApproveSubjectChoice')->name("ApproveSubjectChoice");
Route::get("/deny/subjectchoice/{id?}",'\App\Http\Controllers\SubjectChoiceController@DenySubjectChoice')->name("DenySubjectChoice");
Route::get("/edit/subjectchoice/{id?}",'\App\Http\Controllers\SubjectChoiceController@EditSubjectChoice')->name("EditSubjectChoice");
Route::post("/update/subjectchoice/",'\App\Http\Controllers\SubjectChoiceController@UpdateSubjectChoice')->name("UpdateSubjectChoice");
//
Route::get("/transaction",'\App\Http\Controllers\TransactionController@Transaction')->name("Transaction");
Route::post("/add/transaction",'\App\Http\Controllers\TransactionController@AddTransaction')->name("AddTransaction");

Route::get("/payment/{id}",'\App\Http\Controllers\PaymentController@Payment')->name("Payment");
//Route::get("/payment/{id}/{id2}",'\App\Http\Controllers\PaymentController@Payment')->name("Payment");
Route::post("add/payment",'\App\Http\Controllers\PaymentController@AddPayment')->name("AddPayment");
Route::get("view/payment",'\App\Http\Controllers\PaymentController@ViewPayment')->name("ViewPayment");
Route::post("/view/payment/student/{id?}",'\App\Http\Controllers\PaymentController@ViewStudentPayment')->name("ViewStudentPayment");

Route::get("/report",'\App\Http\Controllers\PaymentController@Report')->name("Report");
Route::post("/view/report/{id?}",'\App\Http\Controllers\PaymentController@ViewReport')->name("ViewReport");


//Route::post("/addstudent",[StudentController::class,"AddStudent"])->name("AddStudent");

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

