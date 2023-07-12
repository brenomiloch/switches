<?php

include 'config.php';

// Processamento do formulário de edição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_antigo = $_POST["nome_antigo"];
    $novo_nome = $_POST["novo_nome"];
    $fabricante = $_POST["fabricante"];
    $addres = $_POST["addres"];

    // Atualização dos dados no banco de dados
    $sql = "UPDATE switches SET nome='$novo_nome', fabricante='$fabricante', addres='$addres' WHERE nome='$nome_antigo'";

    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro na atualização dos dados: " . $conn->error;
    }
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>