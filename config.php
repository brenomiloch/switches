<?php
 // Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sw_bd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

?>