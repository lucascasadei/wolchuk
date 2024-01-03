<?php
// Función para verificar si se está ejecutando localmente
function isLocalhost() {
    // Lista de direcciones IP que suelen ser locales
    $local_ips = ['127.0.0.1', '::1'];

    // Obtén la dirección IP del servidor
    $server_ip = $_SERVER['SERVER_ADDR'];

    // Compara la dirección IP con la lista de direcciones IP locales
    return in_array($server_ip, $local_ips);
}

// Definir las credenciales de la base de datos
if (isLocalhost()) {
    // Estás en un entorno local
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'wolchuk';
} else {
    // Estás en un servidor de hosting (Hostinger)
    $db_username = 'u881364944_empleosformosa';
    $db_password = '5Ub5s3c7e7ar14';
    $db_name = 'u881364944_empleosformosa';
}

// Intenta conectarse a la base de datos
try {
    $pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_username, $db_password, array(
        PDO::ATTR_PERSISTENT => true,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg = 'conexion_ok';
    //echo "exito conexion";
} catch (PDOException $e) {
    $msg = 'conexion_cancel: ' . $e->getMessage();
    //echo "Error al conectar a la base de datos. " . $e->getMessage();
    //echo "error en conexion <br>";
}
?>
