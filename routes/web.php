<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ArticleController@index');

Route::get('/articles', 'App\Http\Controllers\ArticleController@allArticles');

Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@showArticle');

Route::post('/articles/like/{id}', 'App\Http\Controllers\ArticleController@likeArticle');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
