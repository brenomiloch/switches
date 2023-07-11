<?php

include 'config.php';

// Processamento do formulário de edição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_antigo = $_POST["name_antigo"];
    $novo_nome = $_POST["novo_nome"];
    $fabricante = $_POST["fabricante"];

    // Atualização dos dados no banco de dados
    $sql = "UPDATE switches SET name='$novo_name', fabricante='$fabricante' WHERE name='$name_antigo'";

    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro na atualização dos dados: " . $conn->error;
    }
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>