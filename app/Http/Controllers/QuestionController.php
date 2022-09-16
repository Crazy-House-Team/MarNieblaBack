<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class QuestionController extends Controller
{
    public function index()
    {
        $events = Question::all();
        return response()->json($events, 200);
    }

    
}


