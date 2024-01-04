<?php

/* Conexion a la base de datos */
include '../../db/conexion.php';
session_start();

/** Variable para respuesta JSON */
$jsonData = array();

/* Recibir los datos del formulario */
$dni = $_POST['dni'];
$contrasena = $_POST['contrasena'];

/* Validar si los datos no están vacíos */
if (!empty($dni) && !empty($contrasena)) {

    $buscarUsuario = $pdo->prepare("SELECT * FROM usuarios WHERE usuarios_dni = :dni");
    $buscarUsuario->bindParam(':dni', $dni);
    $buscarUsuario->execute();
    $usuario = $buscarUsuario->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Comparar la contraseña con password_verify
        if (password_verify($contrasena, $usuario['usuarios_contrasena'])) {
            // Almacenar datos del usuario en la sesión (excepto la contraseña)
            $_SESSION["idUsuario"] = $usuario['Id_usuarios'];
            $_SESSION["nombreUsuario"] = $usuario['usuarios_nombre'];
            $_SESSION["apellidoUsuario"] = $usuario['usuarios_apellido'];
            $_SESSION["dniUsuario"] = $usuario['usuarios_dni'];
            $_SESSION["area"] = $usuario['Rela_area'];

            $jsonData['success'] = 1;
        } else {
            $jsonData['success'] = 3; // Contraseña incorrecta
        }
    } else {
        $jsonData['success'] = 4; // Usuario no encontrado
    }

} else {
    $jsonData['success'] = 2; // Datos incompletos
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>
