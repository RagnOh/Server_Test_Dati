<div class="mt-4">
  <div class="table-responsive">
    {{-- Aggiunto un bordo arrotondato e un'ombra per contenere la tabella --}}
    <div class="card shadow-sm">
      <table class="table table-bordered table-hover mb-0">
        {{-- Header con sfondo leggermente più scuro e testo maiuscolo per maggiore risalto --}}
        <thead class="table-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User</th>
            <th scope="col">Type</th>
            <th scope="col">Identifier</th>
            <th scope="col" class="text-end">
              <span class="visually-hidden">Actions</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($devices as $device)
            <tr>
              <td>{{ $device->id }}</td>
              <td>{{ $device->user->name }}</td>
              <td>{{ $device->device_type }}</td>
              <td>{{ $device->device_identifier }}</td>
              <td class="text-end">
                <a href="#" class="text-decoration-none text-primary">Edit<span class="visually-hidden">, {{ $device->id }}</span></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{-- Styling per l'area di paginazione --}}
      @if ($devices->hasPages())
        <div class="card-footer bg-white">
          {{ $devices->links('pagination::bootstrap-5') }}
        </div>
      @endif
    </div>
  </div>
</div>

