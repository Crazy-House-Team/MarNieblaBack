<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamsHasQuestionController;
use App\Http\Controllers\TemporalExamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersAnswerController;
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


Route::get('/v1/questions', [QuestionController::class, 'index'])->name('questionsApi');
Route::delete('/v1/deleteQuestion/{id}', [QuestionController::class, 'destroy'])->name('destroyQuestionApi');
Route::get('/v1/showQuestion/{id}', [QuestionController::class, 'show'])->name('showQuestionApi');
//Route::get('/v1/show/{id}', [QuestionController::class, 'show'])->name('showQuestionApi');
Route::post('/v1/storeQuestion', [QuestionController::class, 'store'])->name('storeQuestionApi');
Route::put('/v1/updateQuestion/{id}', [QuestionController::class, 'update'])->name('questionUpdate');

Route::get('/v1/users', [UserController::class, 'index'])->name('UserApi');
Route::post('/v1/storeUser', [UserController::class, 'store'])->name('StoreUserApi');
Route::get('/v1/showUser/{id}', [UserController::class, 'show'])->name('showUserApi');
Route::put('/v1/updateUser/{id}', [UserController::class, 'update'])->name('updateUserApi');
Route::delete('/v1/deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUserApi');


Route::middleware('auth:sanctum')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
});
Route::get('/v1/randomTest/{competecies_id}', [QuestionController::class, 'indexRandom'])->name('randomTestApi');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::delete('/v1/deleteQuestion/{id}', [QuestionController::class, 'destroy'])->name('destroyQuestionApi');
Route::get('/v1/showQuestion/{id}', [QuestionController::class, 'show'])->name('showQuestionApi');
//Route::get('/v1/show/{id}', [QuestionController::class, 'show'])->name('showQuestionApi');
Route::post('/v1/storeQuestion', [QuestionController::class, 'store'])->name('storeQuestionApi');
Route::put('/v1/updateQuestion/{id}', [QuestionController::class, 'update'])->name('questionUpdate');

Route::get('/v1/users', [UserController::class, 'index'])->name('UserApi');
Route::post('/v1/storeUser', [UserController::class, 'store'])->name('StoreUserApi');
Route::get('/v1/showUser/{id}', [UserController::class, 'show'])->name('showUserApi');
Route::put('/v1/updateUser/{id}', [UserController::class, 'update'])->name('updateUserApi');
Route::delete('/v1/deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUserApi');

// Exams Routes
Route::get('/v1/showExams', [ExamController::class, 'showExams'])->name('showExamsApi');
Route::post('/v1/storeExam', [ExamController::class, 'storeExam'])->name('storeExamApi');
Route::delete('v1/deleteExam/{id}', [ExamController::class, 'deleteExam'])->name('deleteExamApi');
Route::put('v1/updateExam/{id}',[ExamController::class, 'updateExam'])->name('updateExamApi');

// Questions in Exam
Route::get('v1/showQuestionsInExam/{exam_id}', [ExamsHasQuestionController::class, 'showQuestionsInExam'])->name('showQuestionsInExamApi');
Route::get('v1/checkExamIsTrue/{exam_id}', [ExamsHasQuestionController::class, 'checkExamIsTrue'])->name('checkExamIsTrueApi');

// User Stadistics
Route::get('v1/showUserStadistics/{user_id}', [UsersAnswerController::class, 'showUserStadistics'])->name('showUserStadisticsApi');

// Temporal Exam
Route::put('/v1/activateQuestion/{id}', [TemporalExamController::class, 'activateQuestion'])->name('activateQuestion');
Route::delete('/v1/deleteExamClass/{id}', [TemporalExamController::class, 'destroy'])->name('deleteExamClass');
