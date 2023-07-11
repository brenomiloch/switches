<?php include('inc\header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Switch</title>
</head>
<body>


<form>
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




    <h2>Cadastro de Switch</h2>
    <form method="POST" action="cad_switch.php">
        <label for="nome">Nome:</label>
        <input type="text" name="name" required><br>

        <label for="fabricante">Fabricante:</label>
        <input type="text" name="fabricante" required><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" required><br>

        <input type="submit" value="Cadastrar">
        <a href="lis_switches.php">Listar Switches</a>
    </form>

    <h2>Edição de Switch</h2>
    <form method="POST" action="edit_switch.php">
        <label for="name_antigo">Nome Antigo:</label>
        <input type="text" name="name_antigo" required><br>

        <label for="novo_nome">Novo Nome:</label>
        <input type="text" name="novo_nome" required><br>

        <label for="fabricante">Fabricante:</label>
        <input type="text" name="fabricante" required><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" required><br>

        <input type="submit" value="Editar">
    </form>

