<?php
include 'db/conexion.php'; // Asegúrate de incluir tu archivo de conexión
require 'vendor/autoload.php'; // Asegúrate de incluir el archivo de autoloading de PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;

// Ruta al archivo Excel de Flexxus
$excelFilePath = 'tu_archivo_excel_flexxus.xlsx';

// Cargar el archivo Excel
$spreadsheet = IOFactory::load($excelFilePath);
$sheet = $spreadsheet->getActiveSheet();

// Iterar sobre las filas del archivo Excel (asume que los datos comienzan en la segunda fila)
foreach ($sheet->getRowIterator(2) as $row) {
    $rowData = $row->getWorksheet()->rangeToArray('A' . $row->getRowIndex() . ':' . 'E' . $row->getRowIndex(), null, true, false);

    // Actualizar el precio de Flexxus en la base de datos
    $codFlexxus = $rowData[0][0]; // Ajusta según la posición de la columna en tu archivo Excel
    $precioFlexxus = $rowData[0][2]; // Ajusta según la posición de la columna en tu archivo Excel

    $sql = "UPDATE productos SET precio_flexxus = ? WHERE cod_flexxus = ?";
    $stmt = $pdo->prepare($sql); // $pdo es tu objeto PDO desde el archivo de conexión
    $stmt->bindParam(1, $precioFlexxus, PDO::PARAM_STR);
    $stmt->bindParam(2, $codFlexxus, PDO::PARAM_INT);
    $stmt->execute();
}

// Cerrar la conexión a la base de datos (si es necesario)
// $pdo = null;
?>
