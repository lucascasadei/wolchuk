<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = file_get_contents('php://input');
    $items = json_decode($json, true);  // Decode JSON data

    if ($items) {
        // Crear un nombre de archivo único para cada remito basado en la fecha y hora actual
        $filename = 'remitos/remito_' . date('Y-m-d_H-i-s') . '.txt';
        $data = "";
        foreach ($items['items'] as $item) {
            $data .= implode(", ", [
                $item['codBejerman'] ?? 'N/A',
                $item['descripcion'] ?? 'N/A',
                $item['lote'] ?? 'N/A',
                $item['cantidad'] ?? 'N/A'
            ]) . PHP_EOL;
        }
        // Guardar el contenido en un archivo nuevo, asegurando que el directorio exista y sea escribible
        if (!file_exists('remitos')) {
            mkdir('remitos', 0777, true);
        }
        file_put_contents($filename, $data, LOCK_EX);  // Usar LOCK_EX para evitar escrituras simultáneas
        echo json_encode(['status' => 'success', 'message' => 'Datos guardados correctamente.', 'filename' => $filename]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No data received']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
