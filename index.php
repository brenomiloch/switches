<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Switch</title>
</head>
<body>
    <h2>Cadastro de Switch</h2>
    <form method="POST" action="cad_switch.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="fabricante">Fabricante:</label>
        <input type="text" name="fabricante" required><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
