<?php 

include 'config.php';

?>

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
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src\css\style.css">
    <!-- <link rel="stylesheet" href="src/css/fontawesome.min.css"> -->

    <title>NoSWITCH</title>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">NoSwitch</a>
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
<div class="main">
<div class="container">
    <div class="row d-flex justify-content-center">
    <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="switches/add.php" class="btn btn-secondary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Novo Switch</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="switches/index.php" class="btn btn-secondary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                    <i class="fa-sharp fa-solid fa-list-ul fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Listar Switch</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
    <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="switches/cad_portas.php" class="btn btn-secondary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Nova Porta</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="switches/view.php" class="btn btn-secondary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                    <i class="fa-sharp fa-solid fa-list-ul fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Listar Portas</p>
                    </div>
                </div>
            </a>
        </div>
    </div> -->
    


    </div>
<script src="src/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/d04954ca67.js" crossorigin="anonymous"></script>
<script src="src/js/main.js"></script>
</body>
</html>