<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Cache\RateLimiting\Limit;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions, 200);
    }
    public function indexRandom($signature)
    {
        if ($signature==0){
            $questions = Question::inRandomOrder()
            ->take(3)
            ->get();
            return response()->json($questions, 200);

        }
        if ($signature == 1){
            $questions = Question::inRandomOrder()
                    ->take(3)
                    ->where('competencies_id', '=', $signature)
                    ->get();
            return response()->json($questions, 200);
            }
            if ($signature == 2){
            $questions = Question::inRandomOrder()
                        ->take(3)
                        ->where('competencies_id', '=', $signature)
                        ->get();
            return response()->json($questions, 200);
                }


    }

    public function destroy($id)
    {
        $question = Question::find($id);
        if ($question == null){
            return response()->json("Esa pregunta no existe", 200);
        }
        $question->delete();
    }
    public function show($id)

    {
        $question = [];

        $question[0] = Question::find($id);
        if ($question[0] == null) {
            return response()->json("Esa pregunta no existe", 200);
        }
        return response()->json($question, 200);
    }
    public function store(Request $request)
    {
        $question = request()->except('_token');
        Question::create($question);
    }
    public function update(Request $request, $id)
    {
        $question = request()->except(['_token', '_method']);
        $questionTest = Question::find($id);
        if ($questionTest == null) {
            return response()->json("Esa pregunta no existe", 200);
        }
        Question::where('id', '=', $id)->update($question);

    }

}
