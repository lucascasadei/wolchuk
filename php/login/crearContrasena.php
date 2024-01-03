<?php

/*conexion*/
include '../../db/conexion.php';
session_start();

/**creamos variable json */
$jsonData = array();

/* Recibimos los datos del formulario */
$contrasena = $_POST['contrasena'];
$Repetircontrasena = $_POST['Repetircontrasena'];
$dni = $_POST['dni'];


  /* Validamos si los datos no vienen vacios*/
  if($contrasena == "" or $Repetircontrasena == ""){
    
    /* Si esta vacio mostramos un mensaje de error*/
    $jsonData['success'] = 2;

  }else{


    if($contrasena == $Repetircontrasena){

        /* Encriptamos la nueva contraseña */
        $pass = password_hash($contrasena, PASSWORD_BCRYPT);

        /* Obtenemos el id del usuario */
        $buscarUsuario = $pdo->prepare("SELECT * FROM usuarios WHERE usuarios_dni='$dni'");
        $buscarUsuario->execute();

        foreach($buscarUsuario as $r){
            $id = $r['Id_usuarios'];
        }

        /* Insertamos la nueva contraseña */
        
        $actualizar = $pdo->prepare("UPDATE usuarios SET usuarios_contrasena='$pass' WHERE `Id_usuarios`= '$id'");
        $actualizar->execute();



        $jsonData['success'] = 1;

    }else{

        $jsonData['success'] = 3;
    }

  }

  
 




header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>