<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::prefix('articles')->group(function () {
    Route::post('{id}/like', [ArticleController::class, 'incrementLikes']);
    Route::post('{id}/view', [ArticleController::class, 'incrementViews']);
    Route::post('{id}/comment', [ArticleController::class, 'addComment']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
