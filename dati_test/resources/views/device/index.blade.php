<x-app-layout>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
          <h1 class="text-base font-semibold leading-6 text-gray-900">Devices</h1>
          <p class="mt-2 text-sm text-gray-700">A list of all the devices</p>
        </div>

        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
          <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Add device
          </button>
        </div>
      </div>

      <livewire:devices.devices-index />
    </div>
  </div>
</x-app-layout>
