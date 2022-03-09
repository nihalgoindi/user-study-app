<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user-study', [QuestionController::class, 'index'])
    ->name('questions.index');

Route::get('/questions/create', [QuestionController::class, 'create'])
    ->name('questions.create');

Route::post('/user-study', [QuestionController::class, 'store'])
    ->name('questions.store');

//Route::post('/submit', [AnswerController::class, 'store'])
  //  ->name('Answers.store');


require __DIR__.'/auth.php';
