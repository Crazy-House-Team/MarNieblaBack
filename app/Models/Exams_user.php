<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'results',
        'users__id',
        'exams_id',
    ];
}
