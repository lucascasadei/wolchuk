<?php
$filename = 'remitos.txt';
$items = [];

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $items[] = explode(", ", $line);
    }
}

// Luego, en la parte del HTML donde quieras mostrar los datos:
?>
<table border="1">
    <thead>
        <tr>
            <th>Código Bejerman</th>
            <th>Descripción</th>
            <th>Lote</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item[0]) ?></td>
            <td><?= htmlspecialchars($item[1]) ?></td>
            <td><?= htmlspecialchars($item[2]) ?></td>
            <td><?= htmlspecialchars($item[3]) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
