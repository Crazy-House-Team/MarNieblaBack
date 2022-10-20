<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersInExam extends Model
{
    use HasFactory;

    protected $table = 'users_in_exam';

    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'is_right_answer',
    ];
}
