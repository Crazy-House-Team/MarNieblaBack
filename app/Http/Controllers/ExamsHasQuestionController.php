<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamsHasQuestion;
use App\Models\Question;
use App\Models\Exam;

use function PHPUnit\Framework\isEmpty;

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

    public function checkExamIsTrue($exam_id){
        $exam = Exam::find($exam_id);
        if(isset($exam) && $exam->status == 1){
            $allQuestions = ExamsHasQuestion::all()->where('exam_id','=',$exam_id);
            $questionsInExam = ExamsHasQuestionController::questions($allQuestions);
            return response()->json($questionsInExam,200);
        }else{
            return response()->json("Sin Datos",200);        
        }      
    }
}
