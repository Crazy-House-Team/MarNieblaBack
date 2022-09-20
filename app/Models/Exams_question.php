<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams_question extends Model
{
    use HasFactory;
    protected $fillable = [
        'questions_id',
        'exams_id',
    ];
}
