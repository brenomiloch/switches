<?php
include '../config.php';

// Verifica se o ID do switch foi fornecido via GET
if (isset($_GET['id'])) {
    $switchId = $_GET['id'];

    // Excluir o switch com base no ID fornecido
    $sql = "DELETE FROM switches WHERE id = '$switchId'";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para o index.php após a exclusão
        header("Location: index.php");
        exit();
    } else {
        echo "Erro na exclusão do switch: " . $conn->error;
    }
} else {
    echo "ID do switch não fornecido.";
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
