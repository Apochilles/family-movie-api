<?php

use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\RecommendationsController;
use App\Http\Controllers\ThoughtsController;
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

Route::prefix('reviews')->group(function (): void {
    Route::get('/reviews', [ReviewsController::class, 'index']);

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
