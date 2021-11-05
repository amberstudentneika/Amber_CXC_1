<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;

    Protected $fillable= [
        'student_id',
        'amount_paid',
        'date_paid',
        'description'
    ];
    public $timestamps = false;
}
