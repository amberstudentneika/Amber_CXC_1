<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'frst_nm',
        'last_nm',
        'dob',
        'class',
        'phone_nbr',
        'email_addr',
        'gender'
    ];
    use HasFactory;

    public $timestamps = false;

       public function subjectchoices(){
       return $this->hasMany(SubjectChoice::class);
    }
}
