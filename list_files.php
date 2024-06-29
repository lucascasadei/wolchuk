<?php
// list_files.php
$dir = 'remitos/';
$files = scandir($dir);
foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        echo "<tr>
                <td>" . htmlspecialchars($file) . "</td>
                <td><button class='btn btn-primary view-detail' data-filename='" . htmlspecialchars($file) . "'>Ver Detalle</button></td>
              </tr>";
    }
}
?>
