<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SensorReading;

class SensorReadingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'sensor_id' => 'required|string',
            'temperature' => 'required|numeric',
            
        ]);

        $reading = SensorReading::create($data);

        return response()->json(['message' => 'Reading saved', 'data' => $reading], 201);
    }
}