<?php

session_start();

// Verifique se o usuário está logado e tem permissão para acessar a página
if (!isset($_SESSION['username']) ) {


    echo "<script>alert(\"Permissão insuficiente. Contate o administrador. \")</script>";
    echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 0);</script>";

  exit();
}
echo "Deu bom";
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
    <a class="navbar-brand" href="../dashboard.php">Navbar</a>
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

<div class="container mt-4 pt-4" >
    <h1>CADASTRO DE SWITCHES</h1>
    <hr>
    <form method="POST" action="model/cad_computador.php">
        <div class="row mb-3">
        <div class="col-md-3">
            <label for="inputName" class="form-label">Host Name</label>
            <input type="text" class="form-control" name="hostname_equipamento" placeholder="Nome" required>
            
        </div>
        <div class="col-md-3">
            <label for="inputName" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo_equipamento" placeholder="DELL7070" required>
            
        </div>
        <div class="col-6">
            <label for="inputName" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo_equipamento" placeholder="Desktop" required>
        </div>
        <div class="col-4 pt-4">
            <label for="inputName" class="form-label">MAC</label>
            <input type="text" class="form-control" name="endereco_mac" placeholder="XX-XX-XX-XX-XX-XX" required>
        </div>
        <div class="col-4 pt-4">
            <label for="inputName" class="form-label">Patrimônio</label>
            <input type="text" class="form-control" name="numero_patrimonio" placeholder="PI0123" required>
        </div>
        <div class="col-4 pt-4">
            <label for="inputName" class="form-label">IP</label>
            <input type="text" class="form-control" name="endereco_ip" placeholder="PI0123" required>
        </div>
        </div>
        <div class="col text-center">
            <button type="submit" value="Cadastrar" class="btn btn-dark bg-gradient text-center">Salvar</button>
            <a href="../index.php" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
</div>
