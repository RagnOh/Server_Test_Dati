<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorReadingController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
  'auth:sanctum',
  config( key: 'jetstream.auth_session'),
  'verified'
  ])->group (function () {
    Route:: get ( '/dashboard', function () {
       return view(  'dashboard');
})->name ( 'dashboard');
});

Route::get('devices', [DeviceController::class, 'index'])->name('devices.index');

Route::post('/devices/{device}/sensor', [SensorController::class, 'store']);
Route::get('/ping', function () {
    return response()->json(['pong' => true]);
});
