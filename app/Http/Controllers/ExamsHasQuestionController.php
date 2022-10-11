<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamsHasQuestion;
use App\Models\Question;

class ExamsHasQuestionController extends Controller
{
    public function showQuestionsInExam($exam_id){
        $allQuestions = ExamsHasQuestion::all()->where('exam_id','=',$exam_id);
        $questionsInExam = ExamsHasQuestionController::questions($allQuestions);
        return response()->json($questionsInExam,200);
    }

    public function questions($allQuestions){
        $questionsInExam = [];
        foreach($allQuestions as $question){
            $questionsInExam[] = ExamsHasQuestionController::getQuestion($question->question_id);
        }
        return $questionsInExam;
    }

    public function getQuestion($id){
        return Question::find($id);
    }
}
