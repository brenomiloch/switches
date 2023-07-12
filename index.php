<?php include('inc\header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Switch</title>
</head>
<body>



<div class="container mt-3 pt-3">
    <form class="row g-3" method="POST" action="cad_switch.php">
        <div class="col-12">
        </div>
        <div class="col-12">
            <div class="bg-secondary opacity-75 bg-gradient p-3 text-center mb-2 text-white fw-bolder fs-3">
                Cadastre-se
            </div>
            <a href="lis_switches.php">LISTAR</a>
            <hr>
        </div>
        <div class="col-12">
            <label for="inputName" class="form-label">nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Name">
            
        </div>
        <div class="col-12">
            <label for="inputName" class="form-label">fabricante</label>
            <input type="text" class="form-control" name="fabricante" placeholder="Name">
            
        </div>
        <div class="col-12">
            <label for="inputName" class="form-label">addres</label>
            <input type="text" class="form-control" name="addres" placeholder="Name">
            
        </div>
        <div class="col-12 text-end">
            <button type="submit" value="Cadastrar" class="btn btn-dark w-100 bg-gradient p-3 text-center mb-2 text-white fw-bolder fs-3">Salvar</button>
        </div>
    </form>
</div>



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
</div>