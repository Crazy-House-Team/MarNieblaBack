<?php

namespace App\Http\Controllers;

use App\Models\TemporalExam;
use Illuminate\Http\Request;

class TemporalExamController extends Controller
{

    public function activateQuestion(Request $request, $exam_id){

        $question = request()->except(['_token', '_method']);
        $examExist=TemporalExam::where('exam_id', '=', $exam_id)->get();
        echo $examExist;


        if(count($examExist)==0){
            TemporalExam::where('exam_id', '=', $exam_id)->create($question);

        }if(count($examExist)>0){
        TemporalExam::where('exam_id', '=', $exam_id)->update($question);}
    }
    public function destroy($exam_id){

         TemporalExam::where('exam_id', '=', $exam_id)->delete();;

    }

    public function activeQuestion($exam_id){
        $activedQuestion=TemporalExam::where('exam_id', '=', $exam_id)->get();
        return response()->json( $activedQuestion, 200);
    }
}
