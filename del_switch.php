<?php

include 'config.php';

 // Processamento do formulário de exclusão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];

    // Exclusão do switch pelo nome
    $sql = "DELETE FROM switches WHERE nome = '$nome'";

    if ($conn->query($sql) === TRUE) {
        echo "Switch excluído com sucesso!";
    } else {
        echo "Erro na exclusão do switch: " . $conn->error;
    }
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
    

