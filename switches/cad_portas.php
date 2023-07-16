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
    $sala = $_POST["sala"];
    $setor = $_POST["setor"];
    $referencia_ponto = $_POST["referencia_ponto"];
    $tipo_equipamento = $_POST["tipo_equipamento"];
    $modelo_equipamento = $_POST["modelo_equipamento"];
    $endereco_ip = $_POST["endereco_ip"];
    $endereco_mac = $_POST["endereco_mac"];
    $numero_patrimonio = $_POST["numero_patrimonio"];
    $portas = $_POST["portas"];

    // Inserção dos dados no banco de dados
    $sql = "INSERT INTO portas (id_switch, link_type, vlan_untagged,vlan_tagged,patch_panel,sala,setor,referencia_ponto,tipo_equipamento,modelo_equipamento,endereco_ip,endereco_mac,numero_patrimonio,portas) VALUES ('$id_switch', '$link_type', '$vlan_untagged','$vlan_tagged','$patch_panel','$sala','$setor','$referencia_ponto','$tipo_equipamento','$modelo_equipamento','$endereco_ip','$endereco_mac','$numero_patrimonio','$portas')";
  

    if ($conn->query($sql) === TRUE) {

        // Cadastro realizado com sucesso
        echo "<script>alert(\"Porta cadastrada com sucesso!\")</script>";
        // função setTimeout do JavaScript para aguardar 2 segundos (2000 milissegundos) antes de 
        // redirecionar para "index.php". Após o tempo especificado, o código window.location.href = 'index.php' 
        // redirecionará o navegador automaticamente, sem a necessidade de interação do usuário.
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 0);</script>";

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
    <a class="navbar-brand" href="../index.php">Navbar</a>
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
        <div class="col-md-6">
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
        <div class="col-md-6">
            <label for="inputTipo" class="form-label">PORTA</label>
            <input type="text" class="form-control" name="portas" placeholder="Tipo" required>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Link Tipo</label>
            <input type="text" class="form-control" name="link_type" placeholder="" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Vlan Untagged</label>
            <input type="text" class="form-control" name="vlan_untagged" placeholder="" required>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Vlan Tagged</label>
            <input type="text" class="form-control" name="vlan_tagged" placeholder="" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Patch Panel</label>
            <input type="text" class="form-control" name="patch_panel" placeholder="" required>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Sala</label>
            <input type="text" class="form-control" name="sala" placeholder="" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Setor</label>
            <input type="text" class="form-control" name="setor" placeholder="" required>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Ponto de referencia</label>
            <input type="text" class="form-control" name="referencia_ponto" placeholder="" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo_equipamento" placeholder="" required>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo_equipamento" placeholder="" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">IP</label>
            <input type="text" class="form-control" name="endereco_ip" placeholder="" required>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">MAC</label>
            <input type="text" class="form-control" name="endereco_mac" placeholder="" required>
        </div>
        <div class="col-md-6">
            <label for="inputStatus" class="form-label">PATRIMÔNIO</label>
            <input type="text" class="form-control" name="numero_patrimonio" placeholder="" required>
        </div>
        </div>

        

        <div class="col text-center">
            <button type="submit" value="Cadastrar" class="btn btn-dark bg-gradient text-center">Salvar</button>
            <a href="../index.php" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
</div>
