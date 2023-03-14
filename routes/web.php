<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', 'App\Http\Controllers\ArticleController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/upload-file', [FileUploadController::class, 'createForm']);
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');

use App\Http\Controllers\VoteController;

Route::get('/', [VoteController::class, 'index'])->name('votes.index');
Route::get('/vote/create', [VoteController::class, 'create'])->name('votes.create');
Route::post('/vote', [VoteController::class, 'store'])->name('votes.store');
Route::get('/vote/{vote}', [VoteController::class, 'show'])->name('votes.show');