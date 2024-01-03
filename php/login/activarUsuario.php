<?php

/*conexion*/
include '../../db/conexion.php';
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
    

    $buscarUsuario = $pdo->prepare("SELECT * FROM usuarios WHERE usuarios_dni='$dni'");
    $buscarUsuario->execute();
    $numero_registro = $buscarUsuario->rowCount();

    if($numero_registro != 0){

        foreach($buscarUsuario as $r){
          
          $_SESSION["idUsuario"] = $r['Id_usuarios'];
          $_SESSION["nombreUsuario"] = $r['usuarios_nombre'];
          $_SESSION["apellidoUsuario"] = $r['usuarios_apellido'];
          $_SESSION["dniUsuario"] = $r['usuarios_dni'];
          $_SESSION["area"] = $r['Rela_area'];
        }

        $jsonData['success'] = 1;

    }else{
        $jsonData['success'] = 3;
      }

}






header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>