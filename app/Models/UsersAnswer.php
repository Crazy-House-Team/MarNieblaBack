<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'user_id',
        'right_answer',
        'id_exam',
    ];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
