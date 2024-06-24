<?php

include 'db/conexion.php'; 



// ... (código de conexión)

// Consulta para obtener los datos de la base de datos
$sql = "SELECT * FROM listaproductos";
$stmt = $pdo->query($sql);

// Verificar si la consulta fue exitosa
if ($stmt) {
    // Recorrer los resultados y comparar precios
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $codValanza = $row["cod_valanza"];
        $precioValanza = $row["precio_valanza"];

        $codBejerman = $row["cod_bejerman"];
        $precioBejerman = $row["precio_bejerman"];

        // Comparar precios
        if ($precioValanza != $precioBejerman) {
            // Aquí puedes realizar acciones como actualizar el precio en una de las tablas
            echo "Producto con código $codValanza tiene precios diferentes en balanza y Bejerman.\n";
        }
    }
} else {
    // Manejar el caso de error en la consulta
    $errorInfo = $pdo->errorInfo();
    echo "Error en la consulta: " . $errorInfo[2] . "\n";
}

// Cerrar la conexión (no es necesario si estás usando PDO)
// $pdo = null; 



?>
