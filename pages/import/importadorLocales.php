<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Ventas Diarias</title>
</head>
<body>
    <h1>Subir Ventas Diarias</h1>
    <form action="procesar_excel.php" method="post" enctype="multipart/form-data">
        <label for="file">Seleccione el archivo Excel:</label>
        <input type="file" name="file" id="file" accept=".xlsx">
        <br><br>
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>
