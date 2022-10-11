<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use App\Models\ExamsHasQuestion;

class ExamController extends Controller
{
    public function showExams(){
        $allExams = Exam::all();
        return response()->json($allExams,200);
    }

    public function storeExam(Request $request){
        $exam = request()->except('_token');
        $lastExam = Exam::create($exam);
        ExamController::saveQuestions($lastExam->id); 
    }

    public function saveQuestions($exam_id){
        $examRandomQuestions = Question::inRandomOrder()
        ->take(20)
        ->get();   

        foreach($examRandomQuestions as $key => $value) {
            $tojunto = ["exam_id"=>$exam_id, "question_id"=>$value->id];
            ExamsHasQuestion::create($tojunto);
        }
    }

    public function deleteExam($id){
        $exam = Exam::find($id);
        if($exam == null){
            return response()->json("No existe ese examn", 200);
        }
        $exam->delete();
    }



















    public function randomQuestions($competenciesId=0){

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
