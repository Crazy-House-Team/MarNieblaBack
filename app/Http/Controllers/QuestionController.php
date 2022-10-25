<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions, 200);
    }
    public function indexRandom($competencies)
    {
        if ($competencies == 0){
            $questions = Question::inRandomOrder()
            ->take(20)
            ->get();
            return response()->json($questions, 200);

        }

        if ($competencies == 1){
            $questions = Question::inRandomOrder()
            ->take(20)
            ->where('competencies_id', '=', $competencies)
            ->get();
            return response()->json($questions, 200);
        }

        if ($competencies == 2){
            $questions = Question::inRandomOrder()
            ->take(20)
            ->where('competencies_id', '=', $competencies)
            ->get();
            return response()->json($questions, 200);
        }
    }

    public function destroy($id){

        $question = Question::find($id);
        if ($question == null){
            return response()->json("Esa pregunta no existe", 200);
        }
        $question->delete();

    }

    public function show($id){
        $question = [];

        $question[0] = Question::find($id);
        if ($question[0] == null) {
            return response()->json("Esa pregunta no existe", 200);
        }
        return response()->json($question, 200);
    }

    public function store(Request $request){
        $question = request()->except('_token');
        Question::create($question);

    }

    public function update(Request $request, $id){
        $question = request()->except(['_token', '_method']);
        $questionTest = Question::find($id);
        if ($questionTest == null) {
            return response()->json("Esa pregunta no existe", 200);
        }
        Question::where('id', '=', $id)->update($question);
    }

}
