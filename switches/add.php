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
    <a class="navbar-brand" href="#">Navbar</a>
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
    <form method="POST" action="cad_switch.php">
        <div class="row mb-3">
        <div class="col-md-3">
            <label for="inputName" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            
        </div>
        <div class="col-md-3">
            <label for="inputName" class="form-label">Fabricante</label>
            <input type="text" class="form-control" name="fabricante" placeholder="HP" required>
            
        </div>
        <div class="col-6">
            <label for="inputName" class="form-label">IP</label>
            <input type="text" class="form-control" name="addres" placeholder="192.168.7.X" required>
        </div>
        </div>
        <div class="col text-center">
            <button type="submit" value="Cadastrar" class="btn btn-dark bg-gradient text-center">Salvar</button>
            <a href="../index.php" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
</div>



<!-- 
<div class="container mt-3 pt-3" >
    <form class="row g-3" method="POST" action="edit_switch.php">
        <div class="col-12">
        </div>
        <div class="col-12">
            <div class="bg-secondary opacity-75 bg-gradient p-3 text-center mb-2 text-white fw-bolder fs-3">
                Edição
            </div>
            <hr>
        </div>
        <div class="col-12">
        <label for="name_antigo">Nome Antigo:</label>
        <input type="text" class="form-control" name="nome_antigo" required><br>
            
        </div>
        <div class="col-12">
        <label for="novo_nome">Novo Nome:</label>
        <input type="text" class="form-control" name="novo_nome" required><br>
            
        </div>
        <div class="col-12">
        <label for="fabricante">Fabricante:</label>
        <input type="text" class="form-control" name="fabricante" required><br>
            
        </div>
        <div class="col-12">
        <label for="fabricante">IP:</label>
        <input type="text" class="form-control" name="addres" required><br>
            
        </div>
        <div class="col-12 text-end">
            <button type="submit" value="Cadastrar" class="btn btn-dark w-100 bg-gradient p-3 text-center mb-2 text-white fw-bolder fs-3">Edição</button>
            
        </div>
    </form>
</div> -->