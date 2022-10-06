<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamsHasQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'question_id',          
	];
    
	public function user()
	{
		return $this->belongsToMany(User::class);
	}
}
