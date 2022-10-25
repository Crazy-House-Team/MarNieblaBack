<?php

namespace App\Http\Controllers;

use App\Models\UsersInExam;
use Illuminate\Http\Request;

class UsersInExamController extends Controller
{
    function subscribeUserToExam(Request $request)
    {
        UsersInExam::create($request->all());
        return response($request);
    }
}
