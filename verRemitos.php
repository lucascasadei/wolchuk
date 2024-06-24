<?php
$filename = 'remitos.txt';
$items = [];

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode(", ", $line);
        if (count($parts) < 4) {
            // Asegúrate de tener todos los elementos necesarios
            while (count($parts) < 4) {
                $parts[] = "N/A"; // Añade 'N/A' para los valores faltantes
            }
        }
        $items[] = $parts;
    }
}

// HTML para mostrar los datos:
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }
        .custom-table {
            border-collapse: separate;
            border-spacing: 0 8px;
            margin: 20px;
            width: calc(100% - 40px);
        }
        .custom-table thead th {
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .custom-table th, .custom-table td {
            padding: 12px;
            text-align: left;
        }
        .custom-table tbody tr {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .custom-table tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Tabla de Remitos</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="freshcart-1-2-1/dist/assets/images/favicon/favicon.ico" />

    <!-- Libs CSS -->
    <link href="freshcart-1-2-1/dist/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="freshcart-1-2-1/dist/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
    <link href="freshcart-1-2-1/dist/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="freshcart-1-2-1/dist/assets/css/theme.min.css" />
</head>
<body>
    <div class="container my-5">
        <!-- Table -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Remitos Registrados</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-hover table-borderless mb-0 text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Código Bejerman</th>
                                <th>Descripción</th>
                                <th>Lote</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                                <tr>
                                    <td><?= htmlspecialchars($item[0]) ?></td>
                                    <td><?= htmlspecialchars($item[1]) ?></td>
                                    <td><?= htmlspecialchars($item[2]) ?></td>
                                    <td><?= htmlspecialchars($item[3]) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <script src="freshcart-1-2-1/dist/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="freshcart-1-2-1/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="freshcart-1-2-1/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="freshcart-1-2-1/dist/assets/js/theme.min.js"></script>
</body>
</html>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.5/dist/js/bootstrap.min.js"></script>

<script>
    setTimeout(function () {
        location.reload(); // Recarga la página cada 5 segundos (5000 milisegundos)
    }, 5000);
</script>