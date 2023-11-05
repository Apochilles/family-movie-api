<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::prefix('movies')->group(function (): void {
    Route::get('/', [MovieController::class, 'index']);

});
Route::prefix('watched_movies')->group(function (): void {
    Route::get('/', [WatchedMoviesController::class, 'index']);

});

Route::prefix('ratings')->group(function (): void {
    Route::get('/', [RatingsController::class, 'index']);

});

Route::prefix('recommendations')->group(function (): void {
    Route::get('/', [RecommendationsController::class, 'index']);
    
});

Route::prefix('thoughts')->group(function (): void {
    Route::get('/', [ThoughtsController::class, 'index']);

});
