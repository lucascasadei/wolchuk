<?php
// Archivo: consulta_localidades.php

// Verificar si se recibió un ID de departamento válido
if (isset($_GET['id_departamento']) && is_numeric($_GET['id_departamento'])) {
    // Conexión a la base de datos (ajusta los detalles de conexión según tu configuración)
    include '../../db/conexion.php';
    
    // Obtener el ID del departamento desde la solicitud AJAX
    $idDepartamento = $_GET['id_departamento'];
    
    // Consulta SQL para obtener las localidades relacionadas con el departamento
    $consulta = $pdo->prepare("SELECT * FROM pueblo WHERE Rela_departamento = :id_departamento");
    $consulta->bindParam(':id_departamento', $idDepartamento, PDO::PARAM_INT);
    $consulta->execute();
    
    // Crear un arreglo para almacenar las localidades
    $localidades = array();
    
    // Recorrer los resultados y agregarlos al arreglo
    while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $localidad = array(
            'Id_pueblo' => $row['Id_pueblo'],
            'descripcion' => $row['descripcion']
            // Agrega más columnas si es necesario
        );
        $localidades[] = $localidad;
    }
    
    // Devolver las localidades en formato JSON
    echo json_encode($localidades);
} else {
    // Enviar una respuesta de error si no se proporcionó un ID válido
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('error' => 'ID de departamento no válido'));
}
?>
