<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function showExams(){
        $allExams = Exam::all();
        return response()->json($allExams,200);
    }

    public function storeExam(Request $request){
        $exam = request()->except('_token');
        Exam::create($exam);
    }

    public function deleteExam($id){
        $exam = Exam::find($id);
        if($exam == null){
            return response()->json("No existe ese examn", 200);
        }
        $exam->delete();
    }
}
