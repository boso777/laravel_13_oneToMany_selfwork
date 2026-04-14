<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//routes articles
Route::get('/article/index' , [ArticleController::class , 'index'])->name('article.index');
Route::get('/article/create' , [ArticleController::class , 'create'])->name('article.create')->middleware('auth');
Route::post('/article/store' , [ArticleController::class , 'store'])->name('article.store')->middleware('auth');
Route::get('/article/{article}' , [ArticleController::class , 'show'])->name('article.show');
Route::delete('/article/{article}' , [ArticleController::class , 'destroy'])->name('article.destroy')->middleware('auth');
Route::get('/article/{article}/edit' , [ArticleController::class , 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/{article}/update' , [ArticleController::class , 'update'])->name('article.update')->middleware('auth');
