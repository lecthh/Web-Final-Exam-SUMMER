<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/movies', [MovieController::class, 'index']);

    Route::get('/movies/{id}', [MovieController::class, 'show']);

    Route::get('/directors/{id}', [DirectorController::class, 'show']);

    Route::get('/actors/{id}', [ActorController::class, 'show']);

    Route::get('/movies-with-ratings', [MovieController::class, 'getAllMoviesWithRatings']);

    Route::get('/reviewer/{id}', [ReviewerController::class, 'show']);
});