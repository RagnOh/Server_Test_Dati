<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dispositivi e Sensori</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Optional: Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    @foreach ($devices as $device)
      <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">{{ $device->name }} <small class="text-light">({{ $device->device_identifier }})</small></h5>
        </div>
        <div class="card-body">
          @if($device->sensor->count())
            <div class="row">
              @foreach ($device->sensor as $sensor)
                <div class="col-md-6 mb-3">
                  <div class="card border-secondary">
                    <div class="card-body">
                      <h6 class="card-title">Sensor ID: {{ $sensor->id }}</h6>
                      <p class="card-text mb-1">
                        🌡 <strong>Temperatura:</strong> {{ $sensor->data['temperature'] ?? 'N/A' }} °C
                      </p>
                      <p class="card-text">
                        💧 <strong>Umidità:</strong> {{ $sensor->data['humidity'] ?? 'N/A' }} %
                      </p>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          @else
            <p class="text-muted">Nessun sensore associato a questo dispositivo.</p>
          @endif
        </div>
      </div>
    @endforeach
  </div>

  <!-- Bootstrap JS (facoltativo per dropdown/modal ecc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
