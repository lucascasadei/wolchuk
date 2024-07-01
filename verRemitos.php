<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Tabla de Remitos</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="freshcart-1-2-1/dist/assets/images/favicon/favicon.ico" />

    <!-- Libs CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="freshcart-1-2-1/dist/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="freshcart-1-2-1/dist/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="freshcart-1-2-1/dist/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="freshcart-1-2-1/dist/assets/css/theme.min.css">

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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .custom-table tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Columna de lista de archivos -->
        <div class="col-md-3">
            <h1>Remitos Guardados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre del Archivo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="fileList">
                    <?php
                    $dir = 'remitos/';
                    $files = scandir($dir);
                    foreach ($files as $file):
                        if ($file !== "." && $file !== ".."):
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($file) ?></td>
                            <td><button class="btn btn-primary view-detail" data-filename="<?= htmlspecialchars($file) ?>">Ver Detalle</button></td>
                        </tr>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Columna de detalle del remito -->
        <div class="col-md-9">
            <h1>Detalle del Remito</h1>
            <table class="table custom-table" id="detailsTable">
                <thead>
                    <tr>
                        <th>Código Bejerman</th>
                        <th>Descripción</th>
                        <th>Lote</th>
                        <th>Cantidad</th>
                        <th>Vencimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Detalles se cargarán aquí -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Libs JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="freshcart-1-2-1/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="freshcart-1-2-1/dist/assets/js/theme.min.js"></script>

<script>
    function updateFileList() {
        $.ajax({
            url: 'list_files.php',
            type: 'GET',
            success: function(response) {
                $('#fileList').html(response);
            }
        });
    }

    $(document).ready(function() {
        setInterval(updateFileList, 5000); // Actualiza la lista cada 5 segundos

        $(document).on('click', '.view-detail', function() {
            var filename = $(this).data('filename');
            $.ajax({
                url: 'detalleRemito.php',
                type: 'GET',
                data: { file: filename },
                success: function(response) {
                    var result = response;
                    if (result.status === 'success') {
                        var rows = '';
                        result.data.forEach(function(item) {
                            rows += '<tr>';
                            rows += '<td>' + item.codBejerman + '</td>';
                            rows += '<td>' + item.descripcion + '</td>';
                            rows += '<td>' + item.lote + '</td>';
                            rows += '<td>' + item.cantidad + '</td>';
                            rows += '<td>' + item.vencimiento + '</td>';
                            rows += '</tr>';
                        });
                        $('#detailsTable tbody').html(rows);
                    } else {
                        alert(result.message);
                    }
                },
                error: function() {
                    alert('Error al cargar los detalles del remito.');
                }
            });
        });
    });
</script>
</body>
</html>
