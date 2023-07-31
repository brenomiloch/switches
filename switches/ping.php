<?php
if (isset($_GET["ip"])) {
    $ip = $_GET["ip"];
    $output = array();
    $result = 0;

    // Execute o ping usando diferentes comandos para sistemas operacionais diferentes
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        // Para Windows
        exec("ping -n 1 " . escapeshellarg($ip), $output, $result);
    } else {
        // Para sistemas UNIX/Linux/Mac
        exec("ping -c 1 " . escapeshellarg($ip), $output, $result);
    }

    if ($result === 0) {
        // O ping foi bem-sucedido, então retornamos um JSON com status "online"
        echo json_encode(array("status" => "online"));
    } else {
        // O ping falhou, retornamos um JSON com status "offline"
        echo json_encode(array("status" => "offline"));
    }
}
?>
