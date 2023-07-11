<?php
 include 'config.php';

// Processamento do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $fabricante = $_POST["fabricante"];
    

    // Inserção dos dados no banco de dados
    $sql = "INSERT INTO switches (name, fabricante) VALUES ('$nome', '$fabricante')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro no cadastro: " . $conn->error;
    }
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
