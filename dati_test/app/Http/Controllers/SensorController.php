<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request,$deviceId) {
        $request->validate([
            'data' => 'required|array'
        ]);
        $device = Device::find($deviceId);
        $sensor = new Sensor([
            'device_id' => $deviceId,
            'data'
        ]);
        $sensor->save();
        return response()->json([
             'message' => 'Data Successfully',
             'sensor' => $sensor
        ]);
    }
}
