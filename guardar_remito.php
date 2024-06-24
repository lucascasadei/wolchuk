<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = file_get_contents('php://input');
    $items = json_decode($json, true);  // Decode JSON data

    if ($items) {
        $filename = 'remitos.txt';
        $data = "";
        foreach ($items['items'] as $item) {
            $data .= implode(", ", [
                $item['codBejerman'] ?? 'N/A',
                $item['descripcion'] ?? 'N/A',
                $item['lote'] ?? 'N/A',
                $item['cantidad'] ?? 'N/A'
            ]) . "\n";
        }
        file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
        echo json_encode(['status' => 'success', 'message' => 'Datos guardados correctamente.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No data received']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
