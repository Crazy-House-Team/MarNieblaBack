<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/v1/', [QuestionController::class, 'index'])->name('QuestionsApi');
Route::delete('/v1/deleteQuestion/{id}', [QuestionController::class, 'destroy'])->name('destroyQuestionApi');
Route::get('/v1/show/{id}', [QuestionController::class, 'show'])->name('showQuestionApi');
Route::post('/v1/storeQuestion', [QuestionController::class, 'store'])->name('storeQuestionApi');
Route::put('/v1/updateQuestion/{id}', [QuestionController::class, 'update'])->name('questionUpdate');

