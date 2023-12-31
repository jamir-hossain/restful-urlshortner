<?php

use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\ShortenedUrlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    // Route::get('user', function (Request $request) {
    //     return $request->user();
    // });
    Route::resource('shortened-url', ShortenedUrlController::class);
});
