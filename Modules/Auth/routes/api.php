<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Modules\Auth\Http\Controllers\AuthController;
use Modules\Auth\Http\Controllers\Auth\GoogleAuthController;




Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::prefix('auth')->group(function () {
    Route::get('/google', [GoogleAuthController::class, 'redirect']);
    Route::get('/google/callback', [GoogleAuthController::class, 'callback']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});