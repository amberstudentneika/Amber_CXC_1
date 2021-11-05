<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    Protected $fillable =[
        'student_id',
        'subject_id',
        'amount_paid',
        'balance_amt',
        'date_paid'
    ];
    public $timestamps = false;
}
