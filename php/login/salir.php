<?php
// Inicia o reanuda la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige al usuario al index
header("Location: ../../index.html");
exit(); // Asegúrate de salir después de enviar la cabecera de redirección
?>
