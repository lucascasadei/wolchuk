<?php

/*conexion*/
include '../../db/conexion.php';
session_start();

/**creamos variable json */
$jsonData = array();

/* Recibimos los datos del formulario */
$metaProducto = $_POST['metaProducto'];
$metaCantidad = $_POST['metaCantidad'];


if($metaProducto !="" and $metaCantidad !=""){


    $cargarMeta = $pdo->prepare("INSERT INTO metasequipoventas(metasEquipoVentas_nombreProducto, metasEquipoVentas_cantidad) 
    VALUES(:producto, :cantidad)");
    
    $cargarMeta->bindParam(':producto',$metaProducto);
    $cargarMeta->bindParam(':cantidad',$metaCantidad);


    if($cargarMeta->execute()){
        $jsonData['success'] = 1;
    }


}else{
    $jsonData['success'] = 2;
}
            
      


header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>