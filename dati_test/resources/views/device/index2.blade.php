<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dispositivi</title>

    <!-- Bootstrap CSS (v5.3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Lista Dispositivi</h5>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">User</th>
              <th scope="col">Type</th>
              <th scope="col">Identifier</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($devices as $device)
              <tr>
                <td>{{ $device->id }}</td>
                <td>{{ $device->user->name }}</td>
                <td>{{ $device->device_type }}</td>
                <td>{{ $device->device_identifier }}</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        {{ $devices->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for components like modals) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

