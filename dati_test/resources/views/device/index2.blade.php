<div class="mt-8 flow-root">
  <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      {{-- Aggiunto un bordo arrotondato e un'ombra per contenere la tabella --}}
      <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
          {{-- Header con sfondo leggermente più scuro e testo maiuscolo per maggiore risalto --}}
          <thead class="bg-gray-100">
            <tr>
              {{-- Padding leggermente aggiustato e testo più leggero per l'header --}}
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-700 sm:pl-6 lg:pl-8">ID</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-700">User</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-700">Type</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-700">Identifier</th>
              {{-- Aggiunto sr-only per l'accessibilità sull'ultima colonna di azioni --}}
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                <span class="sr-only">Actions</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            @foreach($devices as $device)
              {{-- Aggiunto effetto hover sulle righe --}}
              <tr class="hover:bg-gray-50">
                {{-- Padding allineato con l'header --}}
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
                {{-- Padding allineato e testo dell'azione reso leggermente più evidente --}}
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                  <a href="#" class="text-indigo-600 hover:text-indigo-800">Edit<span class="sr-only">, {{ $device->id }}</span></a> {{-- Aggiunto contesto per screen reader --}}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        {{-- Styling per l'area di paginazione --}}
        @if ($devices->hasPages())
          <div class="bg-white px-4 py-3 sm:px-6 lg:px-8 border-t border-gray-200">
            {{ $devices->links() }}
          </div>
        @endif

      </div> {{-- Chiusura del div con ombra e bordo --}}
    </div>
  </div>
</div>
