<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorReadingController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DeviceController;

Route::get('/', [DeviceController::class, 'index']);

Route::middleware([
  'auth:sanctum',
  config( key: 'jetstream.auth_session'),
  'verified'
  ])->group (function () {
    Route:: get ( '/dashboard', function () {
       return view(  'dashboard');
})->name ( 'dashboard');
});

Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');

Route::get('/sensor', [DeviceController::class, 'viewSensor'])->name('sensor.index');

Route::post('/devices/{device}/sensor', [SensorController::class, 'store']);
Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});
