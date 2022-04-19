<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;

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

Route::get('/questions/completed', function () {
    return view('questions.completed');
})->middleware(['auth'])->name('questions.completed');;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user-study', [QuestionController::class, 'index'])
    ->name('questions.index')->middleware(['auth']);;

Route::get('/questions/create', [QuestionController::class, 'create'])
    ->name('questions.create');

Route::post('/', [QuestionController::class, 'store'])
    ->name('questions.store');

Route::post('/user-study', [ResponseController::class, 'store'])
      ->name('responses.store');


require __DIR__.'/auth.php';
