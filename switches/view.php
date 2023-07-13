<?php
// Inclua o arquivo de configuração com a conexão com o banco de dados
include '../config.php';

// Verifique se foi fornecido um ID válido via parâmetro
if(isset($_GET['id']) && !empty($_GET['id'])) {
  // Recupere o ID do switch da variável GET
  $switchId = $_GET['id'];

  // Consulte o banco de dados para obter as informações do switch
  $querySwitch = "SELECT * FROM switches WHERE id = $switchId";
  $resultSwitch = mysqli_query($conn, $querySwitch);
  $switch = mysqli_fetch_assoc($resultSwitch);

  // Consulte o banco de dados para obter as portas relacionadas ao switch
  $queryPortas = "SELECT * FROM portas WHERE id_switches = $switchId";
  $resultPortas = mysqli_query($conn, $queryPortas);
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
    <a class="navbar-brand" href="../dashboard.php">NoSwitch</a>
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

<div class="container mt-4 pt-4">
  <h1>LISTAR PORTAS</h1>
  <?php if(mysqli_num_rows($resultPortas) > 0): ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Tipo</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($resultPortas)): ?>
          <tr>
            <td><?php echo $row['tipo']; ?></td>
            <td><?php echo $row['status']; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>Nenhuma porta encontrada para este switch.</p>
  <?php endif; ?>
</div>

</body>
</html>

<?php
} else {
  // Caso nenhum ID seja fornecido, redirecione para a página inicial ou exiba uma mensagem de erro
  // header("Location: index.php");
  // ou
  // echo "ID do switch não fornecido.";
}
?>
