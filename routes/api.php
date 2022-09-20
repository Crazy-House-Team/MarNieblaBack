<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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
Route::delete('/v1/deleteQuestion/{id}', [QuestionController::class, 'destroy'])->name('DestroyQuestionApi');
Route::get('/v1/show/{id}', [QuestionController::class, 'show'])->name('ShowQuestionApi');
Route::post('/v1/storeQuestion', [QuestionController::class, 'store'])->name('storeQuestionApi');
Route::put('/v1/updateQuestion/{id}', [QuestionController::class, 'update'])->name('QuestionUpdate');
Route::get('/v1/randomTest/{all}', [QuestionController::class, 'indexRandom'])->name('RandomTestApi');
Route::get('/v1/randomTest/{Math}', [QuestionController::class, 'indexRandom'])->name('RandomTestMathApi');
Route::get('/v1/randomTest/{Language}', [QuestionController::class, 'indexRandom'])->name('RandomTestLanguageApi');
Route::get('/v1/randomTest/{English}', [QuestionController::class, 'indexRandom'])->name('RandomTestEnglishApi');

Route::get('/v1/users',[UserController::class , 'index'])->name('UserApi');
Route::post('/v1/storeUser', [UserController::class , 'store'])->name('StoreUserApi');
Route::get('/v1/show/{id}',[UserController::class, 'show' ])->name('showUserApi');
Route::put('/v1/updateUser/{id}',[UserController::class, 'update'])->name('updateUserApi');
Route::delete('/v1/deleteUser/{id}',[UserController::class, 'destroy'])->name('deleteUserApi');