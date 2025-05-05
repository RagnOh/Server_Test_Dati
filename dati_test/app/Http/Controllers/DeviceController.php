<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index() {
        $devices = Device::with('user')->paginate(10);
        return view('device.index2',['devices'=>$devices]);
    }

    public function viewSensor(){
        $devices = Device::with('sensor')->get();

        return view('sensor.index', compact('devices'));
    }

    public function edit ($id) {
        $devices = Device:: findOrFail($id);
        return view('device edit', compact ( 'device')) ;
        }
      
    public function show($id) {
        $devices = Device:: findOrFail($id);
        return view('device show', compact ('device'));
        }
}
