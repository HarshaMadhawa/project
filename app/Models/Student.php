<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id_no',
        'Name_with_initials',
        'Full_name',
        'Contact_no',
        'Address',
        'Email',
        'Date_of_birth',
        'Gender',
        'Degree',
        'Batch',
        'Student_id_no',
        'Profile_picture',


    ];
}
