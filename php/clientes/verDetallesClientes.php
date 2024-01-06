
<?php

include '../../db/conexion.php';
/*-------------------------------------------------------*/


$id = $_POST['id'];

$buscarCliente = $pdo->prepare("SELECT clientes.*, barrio.Barrios_Nombre, departamento.descripcion AS Departamento_Descripcion, pueblo.descripcion AS Pueblo_Descripcion, zona.zona_nombre
FROM clientes
INNER JOIN barrio ON clientes.Rela_barrio = barrio.Id_Barrios
INNER JOIN departamento ON clientes.Rela_departamento = departamento.Id_departamento
INNER JOIN pueblo ON clientes.Rela_localidad = pueblo.Id_pueblo
INNER JOIN zona ON clientes.Rela_zona = zona.Id_zona
WHERE clientes.Id_clientes = '$id'");
$buscarCliente->execute();

foreach($buscarCliente as $a){
    $nombre = $a['clientes_nombre'];
    $apellido = $a['clientes_apellido'];
    $razonSocial = $a['clientes_razonSocial'];
    $cuit = $a['clientes_cuit'];
    $telefono = $a['clientes_telefono'];
    $mail = $a['clientes_mail'];
    $remito = $a['clientes_remito'];
    $codPostal = $a['clientes_CodPostal'];
    $barrio = $a['Barrios_Nombre'];
    $calle = $a['clientes_calle'];
    $numero = $a['clientes_altura'];
    $departamento = $a['Departamento_Descripcion'];
    $localidad = $a['Pueblo_Descripcion'];
    $zona = $a['zona_nombre'];
}

if($mail == ""){
    $mail = "-";
}

if($remito == ""){
    $remito = "-";
}
    


?>

<table border="1" class="table table-bordered">
  <thead>
    <tr>
      <td colspan="2">Detalles</td>
    </tr>
   </thead><tbody>
   <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Nombre: <?php echo $nombre; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Apellido: <?php echo $apellido; ?></td>
    </tr>
    <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Razón social: <?php echo $razonSocial; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Cuil/Cuit: <?php echo $cuit; ?></td>
    </tr>
    <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Télefono: <?php echo $telefono; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Mail: <?php echo $mail; ?></td>
    </tr>
    <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Remito: <?php echo $remito; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Código postal: <?php echo $codPostal; ?></td>
    </tr>
    <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Barrio: <?php echo $numero; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Calle: <?php echo $calle; ?></td>
    </tr>
    <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Altura: <?php echo $numero; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Departamento: <?php echo $departamento; ?></td>
    </tr>
    <tr>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Localidad: <?php echo $localidad; ?></td>
      <td style="width: 150px !important; height: 10px !important;font-size: 12px !important;padding: 5px;">Zona: <?php echo $zona; ?></td>
    </tr>

    
  </tbody>
</table>