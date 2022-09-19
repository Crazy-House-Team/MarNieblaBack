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
        if ($signature === "all"){
        $questions = DB::table('questions')
                ->orderByRaw("RAND()")
                ->take(3)
                ->get();
        }
        if ($signature === "Math"){
            $questions = DB::table('questions')
                    ->orderByRaw("RAND()")
                    ->take(3)
                    ->where('competencies_id', '=', '1')
                    ->get();
            }
            if ($signature === "Lengua"){
                $questions = DB::table('questions')
                        ->orderByRaw("RAND()")
                        ->take(3)
                        ->where('competencies_id', '=', '2')
                        ->get();
                }
            if ($signature === "English"){
                $questions = DB::table('questions')
                        ->orderByRaw("RAND()")
                        ->take(3)
                        ->where('competencies_id', '=', '3')
                        ->get();
                }
        return response()->json($questions, 200);
    }

    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
    }
    public function show($id)

    {
        $question = [];

        $question[0] = Question::find($id);
        return response()->json($question, 200);
    }
    public function store(Request $request)
    {
        $question = request()->except('_token');
        question::create($question);
    }
    public function update(Request $request, $id)
    {
        $question = request()->except(['_token', '_method']);
        Question::where('id', '=', $id)->update($question);

    }

}
