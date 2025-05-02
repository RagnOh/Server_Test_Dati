<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorReadingController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/temperatura', [SensorReadingController::class, 'store']);

Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});