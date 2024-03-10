<?php

use App\Http\Controllers\TmdbController;
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

// USED FOR TESTING
//Route::prefix('movies')->group(function () {
//    Route::controller(TmdbController::class)->group(function () {
//        Route::get('trending/{page?}', 'getTrendingMovies');
//        Route::get('details/{movieId}', 'getMovieDetails');
//        Route::get('upsert-in-db/{movieId}', 'upsertMovieInDB');
//    });
//});

