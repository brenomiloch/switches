<?php
include '../../config.php';

// Processamento do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_equipamento = $_POST["tipo_equipamento"];
    $modelo_equipamento = $_POST["modelo_equipamento"];
    $hostname_equipamento  = $_POST["hostname_equipamento"];
    $endereco_ip   = $_POST["endereco_ip"];
    $endereco_mac   = $_POST["endereco_mac"];
    $numero_patrimonio   = $_POST["numero_patrimonio"];

    // Inserção dos dados no banco de dados
    $sql = "INSERT INTO computador (tipo_equipamento,modelo_equipamento,hostname_equipamento,endereco_ip,endereco_mac,numero_patrimonio) VALUES ('$tipo_equipamento','$modelo_equipamento','$hostname_equipamento','$endereco_ip','$endereco_mac','$numero_patrimonio')";

    if ($conn->query($sql) === TRUE) {
        // Cadastro realizado com sucesso
        echo "<script>alert(\"Computador cadastrado com sucesso!\")</script>";
        // função setTimeout do JavaScript para aguardar 2 segundos (2000 milissegundos) antes de 
        // redirecionar para "index.php". Após o tempo especificado, o código window.location.href = 'index.php' 
        // redirecionará o navegador automaticamente, sem a necessidade de interação do usuário.
        echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 0);</script>";

        exit(); // Encerra o script após o redirecionamento
    } else {
        echo "Erro no cadastro: " . $conn->error;
    }
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
