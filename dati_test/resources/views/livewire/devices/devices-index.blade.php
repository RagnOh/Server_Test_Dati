<div class="mt-8 flow-root">
  <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8"> 
    <div class="inline-block min-w-full py-2 align-middle">
      <table class="min-w-full divide-y divide-gray-300">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">ID</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">User</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Type</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Identifier</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Actions</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 bg-white">
          @foreach($devices as $device)
            <tr>
              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                {{ $device->id }}
              </td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                {{ $device->user->name }}
              </td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                {{ $device->device_type }}
              </td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                {{ $device->device_identifier }}
              </td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="my-3">
        {{ $devices->links() }}
      </div>
    </div>
  </div>
</div>
