<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Device;

class DevicesIndex extends Component
{
    public function render()
    {
        $devices = Device::with('user')->paginate(10); // Eager load relazione con User

        return view('livewire.devices.devices-index', [
            'devices' => $devices,
        ]);
    }
}