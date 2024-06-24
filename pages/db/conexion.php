<?php

// Definir las credenciales de conexión para el entorno local
$sconLocal = "mysql:dbname=wol;host=localhost";
$suserLocal = 'root';
$spassLocal = '';

// Definir las credenciales de conexión para el entorno de hosting
$sconHost = "mysql:dbname=u277628716_chimpance;host=localhost";
$suserHost = 'u277628716_chimpance';
$spassHost = 'Cf4b1a7123';

// Determinar si el script se está ejecutando en un entorno local
$isLocal = ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1');

// Seleccionar las credenciales de conexión basadas en el entorno
$scon = $isLocal ? $sconLocal : $sconHost;
$suser = $isLocal ? $suserLocal : $suserHost;
$spass = $isLocal ? $spassLocal : $spassHost;
$dbName = $isLocal ? "chimpance" : "u277628716_chimpance";

$_SESSION["bd"] = $dbName;
$msg = '';

try {
	$pdo = new PDO($scon, $suser, $spass, array(
		PDO::ATTR_PERSISTENT => true,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	)
	);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$msg = 'conexion_ok';
	//echo "exito conexion global";
} catch (PDOException $e) {
	$msg = 'conexion_cancel: ' . $e->getMessage();
	echo "Error al conectar a la base de datos. " . $e->getMessage();
	echo "error en conexion  <br>";
}
?>