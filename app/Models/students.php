<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $fillable = [
                        'student_id',
                        'studentName',
                        'class_id',
                        'class_name',
                        'subject_id',
                        'section',
    ];
}
