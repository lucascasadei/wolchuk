<?php
header('Content-Type: application/json');

$file = isset($_GET['file']) ? $_GET['file'] : '';

if ($file && file_exists("remitos/$file")) {
    $lines = file("remitos/$file", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $response = [];
    foreach ($lines as $line) {
        $parts = explode(", ", $line);
        // Verificar que hay al menos 5 partes para evitar errores
        if (count($parts) < 5) {
            while (count($parts) < 5) {
                $parts[] = "N/A"; // Añade 'N/A' para los valores faltantes
            }
        }
        $response[] = [
            'codBejerman' => htmlspecialchars($parts[0]),
            'descripcion' => htmlspecialchars($parts[1]),
            'lote' => htmlspecialchars($parts[2]),
            'cantidad' => htmlspecialchars($parts[3]),
            'vencimiento' => htmlspecialchars($parts[4])
        ];
    }
    echo json_encode(['status' => 'success', 'data' => $response]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Archivo no encontrado o no existe el archivo especificado: remitos/' . $file]);
}
?>
