<?php

namespace App\Http\Controllers;

use App\Models\UserAnswerInExam;
use Illuminate\Http\Request;

class UserAnswerInExamController extends Controller
{
    function saveAnswer(Request $request) {
        UserAnswerInExam::create($request->all());

        return \response($request);
    }

    function getAnswers($examId) {
        $response = UserAnswerInExam::where('exam_id', $examId)->get();

        return response()->json($response, 200);
    }
}
