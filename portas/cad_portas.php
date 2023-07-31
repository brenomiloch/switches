<?php
include '../config.php';

// Consulta para obter os switches cadastrados
$querySwitches = "SELECT id, nome FROM switches";
$resultSwitches = mysqli_query($conn, $querySwitches);

// Processamento do formulário de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_switch = $_POST["id_switch"];
    $link_type = $_POST["link_type"];
    $vlan_untagged = $_POST["vlan_untagged"];
    $vlan_tagged = $_POST["vlan_tagged"];
    $patch_panel = $_POST["patch_panel"];
    $portas = $_POST["portas"];

    // Inserção dos dados no banco de dados
    $sql = "INSERT INTO portas (id_switch,link_type,vlan_untagged,vlan_tagged,patch_panel,portas) VALUES ('$id_switch','$link_type','$vlan_untagged','$vlan_tagged','$patch_panel','$portas')";
  

    if ($conn->query($sql) === TRUE) {

        // Cadastro realizado com sucesso
        echo "<script>alert(\"Porta cadastrada com sucesso!\")</script>";
        // função setTimeout do JavaScript para aguardar 2 segundos (2000 milissegundos) antes de 
        // redirecionar para "index.php". Após o tempo especificado, o código window.location.href = 'index.php' 
        // redirecionará o navegador automaticamente, sem a necessidade de interação do usuário.
        echo "<script>setTimeout(function(){ window.location.href = '../dashboard.php'; }, 0);</script>";

        exit(); // Encerra o script após o redirecionamento
    } else {
        echo "Erro no cadastro: " . $conn->error;
    }
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>
<?php
include '../config.php';
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
    <h1>CADASTRO DE PORTAS</h1>
    <hr>
    <form method="POST" action="">
        <div class="row mb-3">
        <div class="col-md-2">
            <label for="inputSwitch" class="form-label">Switch</label>
            <select class="form-control" name="id_switch" required>
                <?php
                // Exibir os switches cadastrados no dropdown
                while($row = mysqli_fetch_assoc($resultSwitches)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputTipo" class="form-label">PORTA</label>
            <input type="text" class="form-control" name="portas" placeholder="Tipo" required>
        </div>


    
        <div class="col-md-2">
            <label for="inputStatus" class="form-label">Link Tipo</label>
            <input type="text" class="form-control" name="link_type" placeholder="" required>
        </div>
        <div class="col-md-2">
            <label for="inputStatus" class="form-label">Vlan Untagged</label>
            <input type="text" class="form-control" name="vlan_untagged" placeholder="" required>
        </div>


        <div class="col-md-2">
            <label for="inputStatus" class="form-label">Vlan Tagged</label>
            <input type="text" class="form-control" name="vlan_tagged" placeholder="" required>
        </div>
        <div class="col-md-2">
            <label for="inputStatus" class="form-label">Patch Panel</label>
            <input type="text" class="form-control" name="patch_panel" placeholder="" required>
        </div>
        </div>


        </div>

        

        <div class="col text-center">
            <button type="submit" value="Cadastrar" class="btn btn-dark bg-gradient text-center">Salvar</button>
            <a href="../dashboard.php" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
</div>
