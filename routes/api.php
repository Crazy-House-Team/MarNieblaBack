<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Events\StudentSubscribed;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::get('/v1/randomTest/{competecies_id}', [QuestionController::class, 'indexRandom'])->name('randomTestApi');

Route::get('/v1/users', [UserController::class, 'index'])->name('UserApi');
Route::post('/v1/storeUser', [UserController::class, 'store'])->name('StoreUserApi');
Route::get('/v1/showUser/{id}', [UserController::class, 'show'])->name('showUserApi');
Route::put('/v1/updateUser/{id}', [UserController::class, 'update'])->name('updateUserApi');
Route::delete('/v1/deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUserApi');

Route::post('/v1/subscribeToExam/{userId}', function ($userId) {
    $student = User::find($userId);
    return StudentSubscribed::dispatch($student);
})->name('subscribeToExam');

