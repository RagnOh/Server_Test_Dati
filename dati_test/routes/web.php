<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorReadingController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/sensor-readings', [SensorReadingController::class, 'store']);