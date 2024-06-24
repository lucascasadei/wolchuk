<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Archivo Excel</title>
</head>
<body>
    <h2>Cargar Archivo Excel</h2>
    <form action="actualizarPrecios.php" method="post" enctype="multipart/form-data">
        <label for="excelFile">Seleccionar Archivo Excel:</label>
        <input type="file" name="excelFile" id="excelFile" accept=".xlsx, .xls">
        <br>
        <input type="submit" value="Cargar y Procesar">
    </form>
</body>
</html>
