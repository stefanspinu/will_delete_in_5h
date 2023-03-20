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

Route::resource('/admin/articles', 'App\Http\Controllers\ArticleController')->middleware('auth');
Auth::routes();

Route::get('/articles', 'App\Http\Controllers\ArticleController@showArticles')->name('allArticle');
Route::get('/article/{article}', 'App\Http\Controllers\ArticleController@showArticle')->name('singleArticle');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/upload-file', [FileUploadController::class, 'createForm'])->name('fileUploadSys');
Route::post('/admin/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');
Route::get('/all-files', [FileUploadController::class, 'listFiles'])->name('listFiles');

use App\Http\Controllers\VoteController;

Route::get('/', [VoteController::class, 'index'])->name('votes.index');
Route::get('/vote/create', [VoteController::class, 'create'])->name('votes.create');
Route::post('/vote', [VoteController::class, 'store'])->name('votes.store');
Route::get('/vote/{vote}', [VoteController::class, 'show'])->name('votes.show');
Route::get('/admin/votes', [VoteController::class, 'showVotes'])->name('showVotes')->middleware('auth');
