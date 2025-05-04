<?php

namespace App\Livewire;
use App\Models\Device;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class CreateDevice extends Component
{
    public $users, $name, $device_type, $device_identifier, $user_id;

public function mount(): void
{
    $this->users = User::all();
}

public function submit(): void
{
$this->validate([
'name' => 'required|string|max: 255',
'device_type' => 'required|string|max: 255',
'user_id'=> 'required|exists:users,id',
]);
Device::create([
'user_id'=> $this->user_id,
'name' => $this->name,
'device_type' => $this->device_type,
'device identifier' => Str::uuid(), // Generate UUID automatically
]);
$this->dispatch('deviceCreated');
$this->dispatch('closeCreateDeviceModal');
$this->reset ([' name', 'device_type', 'device_identifier', 'user_id']);
}

public function render(): Factory|Application|View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.devices.create-device',['users'=>$this->users]);
    }
}
