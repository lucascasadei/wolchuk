<?php
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$host = 'localhost';
$db = 'wol';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

if ($_FILES['file']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['file']['tmp_name'])) {
    $file = $_FILES['file']['tmp_name'];

    try {
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        foreach ($rows as $index => $row) {
            if ($index == 0) continue; // Saltar la primera fila (encabezados)

            $fecha = date('Y-m-d', strtotime($row[0]));
            $grupo = $row[1];
            $importe_total = floatval(str_replace(',', '', $row[2]));

            $stmt = $pdo->prepare("INSERT INTO ventas_diarias (fecha, grupo, importe_total) VALUES (?, ?, ?)");
            $stmt->execute([$fecha, $grupo, $importe_total]);
        }

        echo "Datos importados con éxito!";
    } catch (Exception $e) {
        echo "Error al procesar el archivo: " . $e->getMessage();
    }
} else {
    echo "Error al subir el archivo.";
}
?>
