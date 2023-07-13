<?php
include '../../config.php';

// Verifica se o formulário foi submetido e se o ID e os campos estão presentes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"], $_POST["nome"], $_POST["fabricante"], $_POST["addres"])) {
    $switchId = $_POST["id"];
    $nome = $_POST["nome"];
    $fabricante = $_POST["fabricante"];
    $addres = $_POST["addres"];

    // Atualiza as informações do switch no banco de dados
    $sql = "UPDATE switches SET nome = '$nome', fabricante = '$fabricante', addres = '$addres' WHERE id = '$switchId'";

    if ($conn->query($sql) === TRUE) {
        // Mensagem de sucesso e redirecionamento para index.php
        echo '<script>alert("Switch atualizado com sucesso!"); window.location.href = "../index.php";</script>';
    } else {
        // Mensagem de erro e redirecionamento para index.php
        echo '<script>alert("Erro na atualização do switch: ' . $conn->error . '"); window.location.href = "../index.php";</script>';
    }
} else {
    // Redirecionamento para index.php caso os dados do switch não sejam fornecidos ou o formulário não seja enviado
    header("Location: index.php");
    exit();
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
