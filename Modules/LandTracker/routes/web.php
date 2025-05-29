<?php

use Illuminate\Support\Facades\Route;
use Modules\LandTracker\Http\Controllers\LandTrackerController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('landtrackers', LandTrackerController::class)->names('landtracker');
});
