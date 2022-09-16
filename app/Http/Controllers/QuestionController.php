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

    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
    }
    public function show($id)
    {
        $question = Question::find($id);
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
