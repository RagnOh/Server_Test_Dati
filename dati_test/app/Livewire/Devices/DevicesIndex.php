<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Device;
use Livewire\WithPagination;

class DevicesIndex extends Component
{
    use WithPagination;

    public function render()
    {
        

        return view('livewire.devices.devices-index', [
            'devices' => $devices,
        ]);
    }
}