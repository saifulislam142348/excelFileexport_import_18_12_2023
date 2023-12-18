<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['student_id','user_id','guardian_id'
    ,'relation','first_name','last_name',
    'dob','gender','phone','father_name',
    'mother_name','present_address','permanent_address',
'photo','created_by','updated_by','status','deleted_at','deleted_by'];
    use HasFactory;

}
