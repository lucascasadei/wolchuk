<?php

/*conexion*/
include '../../db/conexion.php';
session_start();

/**creamos variable json */
$jsonData = array();

/* Recibimos los datos del formulario */
$nombre = $_POST['clienteNombre'];
$apellido = $_POST['clienteApellido'];
$razonSocial = $_POST['clienteRazonSocial'];
$cuit = $_POST['clienteCuit'];
$clienteBarrio = $_POST['clienteBarrio'];
$clienteDepartamento = $_POST['clienteDepartamento'];
$clienteLocalidad = $_POST['clienteLocalidad'];
$clienteCodPostal = $_POST['clienteCodPostal'];
$clienteZona = $_POST['clienteZona'];
$clienteCalle = $_POST['clienteCalle'];
$clienteAltura = $_POST['clienteAltura'];
$clienteTipo = $_POST['clienteTipo'];
$clienteMail = $_POST['clienteMail'];
$clienteRemito = $_POST['clienteRemito'];
$clienteTelefono = $_POST['clienteTelefono'];
$idUsuarios = $_SESSION["idUsuario"];

if($nombre !="" and $apellido !="" and $razonSocial !="" and $cuit !="" and $clienteBarrio !="" and $clienteDepartamento !="" and $clienteLocalidad !="" and $clienteCodPostal !="" and $clienteZona !="" and $clienteCalle !="" and $clienteAltura !="" and $clienteTipo !="" and $clienteTelefono !=""){
    

    $buscarCliente = $pdo->prepare("SELECT * FROM clientes WHERE clientes_cuit='$cuit'");
    $buscarCliente->execute();

    if ($buscarCliente->rowCount() > 0){
        $jsonData['success'] = 3;

    }else{

        if($clienteTipo == 1 or $clienteTipo == 2){

            $cargarCliente = $pdo->prepare("INSERT INTO clientes(clientes_nombre, clientes_apellido, clientes_razonSocial, clientes_cuit, clientes_CodPostal, Rela_barrio, Rela_departamento, Rela_localidad, Rela_zona, Rela_usuario, clientes_calle, clientes_altura, Rela_tipocliente, clientes_mail, clientes_telefono) 
                VALUES(:nombre, :apellido, :razonSocial, :cuit, :codPostal, :barrio, :departamento, :localidad, :zona, :usuario, :calle, :altura, :tipocliente, :mail, :telefono)");

                $cargarCliente->bindParam(':nombre',$nombre);
                $cargarCliente->bindParam(':apellido',$apellido);
                $cargarCliente->bindParam(':razonSocial',$razonSocial);
                $cargarCliente->bindParam(':cuit',$cuit);
                $cargarCliente->bindParam(':codPostal',$clienteCodPostal);
                $cargarCliente->bindParam(':barrio',$clienteBarrio);
                $cargarCliente->bindParam(':departamento',$clienteDepartamento);
                $cargarCliente->bindParam(':localidad',$clienteLocalidad);
                $cargarCliente->bindParam(':zona',$clienteZona);
                $cargarCliente->bindParam(':calle',$clienteCalle);
                $cargarCliente->bindParam(':altura',$clienteAltura);
                $cargarCliente->bindParam(':usuario',$idUsuarios);
                $cargarCliente->bindParam(':tipocliente',$clienteTipo);
                $cargarCliente->bindParam(':mail',$clienteMail);
                $cargarCliente->bindParam(':telefono',$clienteTelefono);

        }else if($clienteTipo == 3){

            $cargarCliente = $pdo->prepare("INSERT INTO clientes(clientes_nombre, clientes_apellido, clientes_razonSocial, clientes_cuit, clientes_CodPostal, Rela_barrio, Rela_departamento, Rela_localidad, Rela_zona, Rela_usuario, clientes_calle, clientes_altura, Rela_tipocliente, clientes_remito, clientes_telefono) 
                VALUES(:nombre, :apellido, :razonSocial, :cuit, :codPostal, :barrio, :departamento, :localidad, :zona, :usuario, :calle, :altura, :tipocliente, :remito, :telefono)");

                $cargarCliente->bindParam(':nombre',$nombre);
                $cargarCliente->bindParam(':apellido',$apellido);
                $cargarCliente->bindParam(':razonSocial',$razonSocial);
                $cargarCliente->bindParam(':cuit',$cuit);
                $cargarCliente->bindParam(':codPostal',$clienteCodPostal);
                $cargarCliente->bindParam(':barrio',$clienteBarrio);
                $cargarCliente->bindParam(':departamento',$clienteDepartamento);
                $cargarCliente->bindParam(':localidad',$clienteLocalidad);
                $cargarCliente->bindParam(':zona',$clienteZona);
                $cargarCliente->bindParam(':calle',$clienteCalle);
                $cargarCliente->bindParam(':altura',$clienteAltura);
                $cargarCliente->bindParam(':usuario',$idUsuarios);
                $cargarCliente->bindParam(':tipocliente',$clienteTipo);
                $cargarCliente->bindParam(':remito',$clienteRemito);
                $cargarCliente->bindParam(':telefono',$clienteTelefono);

        }

        if($cargarCliente->execute()){
            $jsonData['success'] = 1;
        }

        
    }


}else{

    
    $jsonData['success'] = 2;

    
}



header('Content-type: application/json; charset=utf-8');
echo json_encode($jsonData);

?>