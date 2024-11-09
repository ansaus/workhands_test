<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'articleList'])->name('articles.list');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');