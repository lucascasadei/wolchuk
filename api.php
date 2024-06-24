<?php
include 'pages/db/conexion.php';  // Asegúrate de incluir el script de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['codigo'])) {
    $codDeBarras = $_POST['codigo'];
    try {
        $stmt = $pdo->prepare("SELECT codBejerman, descripcion FROM Articulos WHERE codDeBarras = :codDeBarras");
        $stmt->bindParam(':codDeBarras', $codDeBarras, PDO::PARAM_STR);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) {
            echo json_encode($resultado);
        } else {
            echo json_encode(array('error' => 'No se encontró el artículo.'));
        }
    } catch (PDOException $e) {
        echo json_encode(array('error' => 'Error en la base de datos: ' . $e->getMessage()));
    }
}
?>
