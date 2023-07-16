<?php
include '../config.php';

// Verifica se o ID do switch foi fornecido via GET
if (isset($_GET['id'])) {
    $switchId = $_GET['id'];

    // Consulta os dados do switch com base no ID fornecido
    $sql = "SELECT * FROM switches WHERE id = '$switchId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $switch = $result->fetch_assoc();
    } else {
        echo "Switch não encontrado.";
        exit();
    }
} else {
    echo "ID do switch não fornecido.";
    exit();
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\src\css\style.css">
    <!-- <link rel="stylesheet" href="src/css/fontawesome.min.css"> -->

    <title>NoSWITCH</title>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">NoSwitch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <!-- <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a> -->
        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </div>
</nav>






    <div class="container mt-4">
        <h1>Editar Switch</h1>
        <form action="modal/update_switch.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $switch['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $switch['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="fabricante">Fabricante:</label>
                <input type="text" class="form-control" id="fabricante" name="fabricante" value="<?php echo $switch['fabricante']; ?>">
            </div>
            <div class="form-group">
                <label for="ip">IP:</label>
                <input type="text" class="form-control" id="endereco_ip" name="endereco_ip" value="<?php echo $switch['endereco_ip']; ?>">
            </div>
            <div class="form-group">
                <label for="ip">IP:</label>
                <input type="text" class="form-control" id="endereco_mac" name="endereco_mac" value="<?php echo $switch['endereco_mac']; ?>">
            </div>
            <div class="form-group">
                <label for="ip">IP:</label>
                <input type="text" class="form-control" id="numero_patrimonio" name="numero_patrimonio" value="<?php echo $switch['numero_patrimonio']; ?>">
            </div>
            <div class="pt-4">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
