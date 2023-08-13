<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\QuestionsContoller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class,'index']);
Route::resource('blog',PostsController::class);
// Route::resource('ques',QuestionsContoller::class);
Auth::routes();
// Route::post('/ques/check',[QuestionsContoller::class,'check']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
