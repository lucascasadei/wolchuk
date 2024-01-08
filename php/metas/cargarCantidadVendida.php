<?php

/*conexion*/
include '../../db/conexion.php';
session_start();

/**creamos variable json */
$jsonData = array();

/* Recibimos los datos del formulario */

        $jsonData['success'] = 1;




header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>