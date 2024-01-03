<?php

/*conexion*/
include '../db/conexion.php';
session_start();

/**creamos variable json */
$jsonData = array();

/* Recibimos los datos del formulario */
$dni = $_POST['dni-usuario'];

 /* Validamos si los datos no vienen vacios*/
 if($dni == ""){
    
    /* Si esta vacio mostramos un mensaje de error*/
    $jsonData['success'] = 2;

  }else{
    $jsonData['success'] = 1;
  }


 




header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>