<?php
include '../config.php';

// Verifica se o ID do switch foi fornecido via GET
if (isset($_GET['id'])) {
    $switchId = $_GET['id'];

    // Excluir o switch com base no ID fornecido
    $sql = "DELETE FROM switches WHERE id = '$switchId'";

    if ($conn->query($sql) === TRUE) {

        // Cadastro realizado com sucesso
        echo "<script>alert(\"Switch deletado com sucesso!\")</script>";
        // função setTimeout do JavaScript para aguardar 0 segundos ( 0 milissegundos) antes de 
        // redirecionar para "index.php". Após o tempo especificado, o código window.location.href = 'index.php' 
        // redirecionará o navegador automaticamente, sem a necessidade de interação do usuário.
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 0);</script>";        
        
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
