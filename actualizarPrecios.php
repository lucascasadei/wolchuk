<?php
require 'vendor/autoload.php';
include 'db/conexion.php';

// Verificar si se ha enviado un archivo
if ($_FILES['excelFile']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['excelFile']['tmp_name'])) {
    // Ruta temporal del archivo cargado
    $tempFilePath = $_FILES['excelFile']['tmp_name'];

    // Cargar el archivo Excel
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($tempFilePath);

    // Obtener la hoja activa
    $sheet = $spreadsheet->getActiveSheet();

    // Obtener datos de la hoja (asumiendo que los datos comienzan en la fila 2)
    $data = $sheet->toArray(null, true, true, true);

    // Indicador para saltar la primera fila que contiene encabezados
    $skipFirstRow = true;

    // Recorrer los datos del archivo Excel
    foreach ($data as $rowNumber => $row) {
        // Saltar la primera fila que contiene encabezados
        if ($skipFirstRow) {
            $skipFirstRow = false;
            continue;
        }

        // Verificar si las claves están definidas antes de intentar acceder a ellas
        if (isset($row['B'], $row['D'])) {
            $codBejermanExcel = $row['B'];  // Cambiar a la primera columna
            $nuevoPrecioBejerman = $row['D'];  // Cambiar a la cuarta columna

            // Obtener el precio actual de la base de datos
        $sqlSelect = "SELECT precio_bejerman FROM listaproductos WHERE cod_bejerman = :codBejermanExcel";
        $stmtSelect = $pdo->prepare($sqlSelect);
        $stmtSelect->bindParam(':codBejermanExcel', $codBejermanExcel, PDO::PARAM_INT);
        $stmtSelect->execute();
        $precioActual = $stmtSelect->fetchColumn();

        // Imprimir valores de la consulta (solo con fines de depuración)
        //echo "Código Bejerman: $codBejermanExcel, Precio Actual: $precioActual, Nuevo Precio Bejerman: $nuevoPrecioBejerman\n<br>";

        // Verificar si la actualización es necesaria
        if ($precioActual != $nuevoPrecioBejerman) {
            // Consultar y actualizar la base de datos si existe el código en Bejerman
            $sqlUpdate = "UPDATE listaproductos SET precio_bejerman = :nuevoPrecioBejerman WHERE cod_bejerman = :codBejermanExcel";
            $stmtUpdate = $pdo->prepare($sqlUpdate);

            // Imprimir la consulta SQL (solo con fines de depuración)
            //echo "Consulta SQL: $sqlUpdate\n";

            if (!$stmtUpdate) {
                die("Error en la preparación de la consulta: " . print_r($pdo->errorInfo(), true));
            }

            // Imprimir valores de la consulta (solo con fines de depuración)
            //echo "Código Bejerman: $codBejermanExcel, Nuevo Precio Bejerman: $nuevoPrecioBejerman\n";

            $stmtUpdate->bindParam(':nuevoPrecioBejerman', $nuevoPrecioBejerman, PDO::PARAM_STR);
            $stmtUpdate->bindParam(':codBejermanExcel', $codBejermanExcel, PDO::PARAM_INT);

            if (!$stmtUpdate->execute()) {
                die("Error al ejecutar la consulta: " . print_r($stmtUpdate->errorInfo(), true));
            }
        } else {
           // echo "No es necesario actualizar el precio.\n";
        }
        } else {
            // Mostrar un mensaje indicando que las claves no están definidas
            echo "Advertencia: Claves no definidas en la fila $rowNumber del archivo Excel. Ignorando la fila.\n";
            echo "Contenido de la fila: " . print_r($row, true) . "\n";
            continue;  // Saltar al siguiente ciclo del bucle
        }
    }

    // Puedes imprimir un mensaje de éxito
    echo "Archivo Excel cargado y procesado con éxito.";
} else {
    // Imprimir un mensaje de error si no se cargó un archivo
    echo "Error al cargar el archivo Excel. Asegúrate de seleccionar un archivo válido.";
}
?>


    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Incluir DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- Incluir DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>



<?php
    $buscarStock = $pdo->prepare("SELECT * FROM listaproductos");
    $buscarStock->execute();
?>

<table id="datatable" class="datatables-users table border-top" data-page-length="10">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Cod Balanza</th>
            <th>Precio Balanza</th>
            <th>Cod Bejerman</th>
            <th>Precio Bejerman</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $buscarStock->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td></td>
                <td></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['cod_valanza']; ?></td>
                <td><?php echo $row['precio_valanza']; ?></td>
                <td><?php echo $row['cod_bejerman']; ?></td>
                <td><?php echo $row['precio_bejerman']; ?></td>


                <td><?php 
                
                if($row['precio_valanza'] != $row['precio_bejerman']){
                    echo 'Diferencia';
                }else{
                    echo 'Actualizado'; 
                }
                
                
                
                ?></td>
                <td><?php echo "<button onclick='Actualizar(" . $row['Id_listaProductos'] . ")'>Actualizar</button>"; ?></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>



<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>

<script>
   /* function Actualizar(id){
*/
</script>
