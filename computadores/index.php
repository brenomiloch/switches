<?php
include '../config.php';

$sql = "SELECT * FROM computador ORDER BY hostname_equipamento";
$result = $conn->query($sql);

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

<div class="container mt-4 pt-4" >
    <h1>COMPUTADORES</h1>
<?php if ($result->num_rows > 0): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead> 
                    <tr>
                        <th>Host Name</th>
                        <th>Tipo</th>
                        <th>Modelo</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>PI</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row["hostname_equipamento"]; ?></td>
                            <td><?php echo $row["tipo_equipamento"]; ?></td>
                            <td><?php echo $row["modelo_equipamento"]; ?></td>
                            <td><?php echo $row["endereco_ip"]; ?></td>
                            <td><?php echo $row["endereco_mac"]; ?></td>
                            <td><?php echo $row["numero_patrimonio"]; ?></td>
                            <td class="actions text-right">
			<a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit_switch.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
      <a href="del_switch.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-pencil"></i> Excluir</a>


      <!-- <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-switchid="<?php echo $row['id']; ?>">
    <i class="fa fa-trash"></i> Excluir
</a> -->



		</td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p>Nenhum switch encontrado.</p>
    <?php endif; ?>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

