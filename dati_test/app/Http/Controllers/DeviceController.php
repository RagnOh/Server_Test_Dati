<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index() {
        return view('device.index2');
    }

    public function edit ($id) {
        $device = Device:: findOrFail($id);
        return view('device edit', compact ( 'device')) ;
        }
      
    public function show($id) {
        $device = Device:: findOrFail($id);
        return view('device show', compact ('device'));
        }
}
