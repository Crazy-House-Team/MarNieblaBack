<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswerInExam extends Model
{
    use HasFactory;

    protected $table = 'users_answers_in_exams';
    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'is_right',
    ];
}
