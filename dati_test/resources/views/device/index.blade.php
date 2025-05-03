@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">Devices</h2>
        <a href="{{ route('devices.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Add user</a>
    </div>

    <p class="text-gray-600 mb-4">A list of all the devices</p>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 text-left text-sm font-medium text-gray-700">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">User</th>
                    <th class="px-6 py-4">Device Type</th>
                    <th class="px-6 py-4">Device Identifier</th>
                    <th class="px-6 py-4">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($devices as $device)
                    <tr class="border-t">
                        <td class="px-6 py-4">{{ $device->id }}</td>
                        <td class="px-6 py-4">
                            <div class="font-semibold">{{ $device->user->name }}</div>
                            <div class="text-sm text-gray-500">{{ $device->user->role }}</div>
                        </td>
                        <td class="px-6 py-4">{{ $device->email }}</td>
                        <td class="px-6 py-4">{{ $device->identifier }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('devices.edit', $device->id) }}" class="text-indigo-600 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
