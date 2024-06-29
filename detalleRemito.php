<?php
if (isset($_GET['file'])) {
    $filename = 'remitos/' . $_GET['file'];
    if (file_exists($filename)) {
        $contents = file_get_contents($filename);
        $lines = explode(PHP_EOL, $contents);
        foreach ($lines as $line) {
            $item = explode(", ", $line);
            echo "<tr>
                    <td>" . htmlspecialchars($item[0]) . "</td>
                    <td>" . htmlspecialchars($item[1]) . "</td>
                    <td>" . htmlspecialchars($item[2]) . "</td>
                    <td>" . htmlspecialchars($item[3]) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>El archivo no existe.</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>No se especificó ningún archivo.</td></tr>";
}
?>