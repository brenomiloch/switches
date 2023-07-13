
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="src\css\style.css">
    <!-- <link rel="stylesheet" href="src/css/fontawesome.min.css"> -->

    <style>
        
.form-signin {
    position: relative;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  
  .form-signin .checkbox {
    font-weight: 400;
  }
  
  .form-signin .form-floating:focus-within {
    z-index: 2;
  }
  
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  label{
    color: black;
}

  
    </style>

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


<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Se estiver logado, exibe o nome do usuário e o botão de logout
    echo "<p>Bem-vindo, $username!</p>";
    echo '
    <form method="POST" action="switches/modal/logout_process.php">
        <button type="submit" class="btn btn-success">Logout</button>
    </form>
    ';
} else {
    // Se não estiver logado, exibe o formulário de login
    echo '


    <main class="form-signin">
    <form method="POST" action="switches/modal/login_process.php">
      <img class="mb-0" src="src/img/network-switch-256.png" alt="" width="146" height="116">
      <h1>No Switch</h1>
<hr>
      <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
  
      <div class="form-floating">
        <label for="username" class="form-label"></label>
        <input type="text" class="form-control" name="username" placeholder="Usuário" required>
      </div>
      <div class="form-floating">
      <label for="password" class="form-label"></label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
  
 
 
      <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
      <p class="mt-5 mb-3 text-muted">&copy;NoSwitch - 2023</p>
    </form>
  </main>




    ';
}
?>









<script src="src/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/d04954ca67.js" crossorigin="anonymous"></script>
<script src="src/js/main.js"></script>
</body>
</html>