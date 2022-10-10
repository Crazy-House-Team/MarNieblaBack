<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class ExamsHasQuestionController extends Controller
{
    public function saveExam($examId, $competenciesId=0){

        if($competenciesId == 0){
            $examRandomQuestions = Question::inRandomOrder()
            ->take(20)
            ->get();
        }else{
            $examRandomQuestions = Question::inRandomOrder()
            ->take(20)
            ->where('competencies_id', '=', $competenciesId)
            ->get();
        }

        return response()->json($examRandomQuestions, 200);   
        
    }
}
