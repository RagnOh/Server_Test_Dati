<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Sensor;

class SensorController extends Controller
{
    public function store(Request $request,$deviceId) {
        $request->validate([
            'data' => 'required|array'
        ]);
        $device = Device::find($deviceId);
        $sensor = new Sensor([
            'device_id' => $deviceId,
            'data' => json_encode($request->data)
        ]);
        $sensor->save();
        return response()->json([
             'message' => 'Data Successfully',
             'sensor' => $sensor
        ]);
    }
}
