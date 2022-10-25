<?php

namespace App\Http\Controllers;

use App\Models\UsersAnswer;
use Illuminate\Http\Request;

class UsersAnswerController extends Controller
{
    public function showUserStadistics($user_id){
        $answers = UsersAnswer::all()->where('user_id','=', $user_id);
        return response()->json($answers, 200);
    }
    public function saveUserResults(Request $request){
        $results = request()->except('_token');
        UsersAnswer::create($results);
    }
}
