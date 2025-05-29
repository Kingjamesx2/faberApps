<?php

use Illuminate\Support\Facades\Route;
use Modules\LandTracker\Http\Controllers\LandTrackerController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('landtrackers', LandTrackerController::class)->names('landtracker');
});
