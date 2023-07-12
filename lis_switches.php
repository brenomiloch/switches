<?php 

include 'config.php';

$sql = "SELECT * FROM switches ORDER BY nome";

$result = $conn->query($sql);

if ($result->num_rows > 0) {


    echo "<h2>Lista de Switches</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Fabricante</th><th>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["fabricante"] . "</td><td>" . $row["addres"];
    }
    echo "</table>";
} else {
    echo "Nenhum switch encontrado.";
}

// Fechamento da conexão com o banco de dados
$conn->close();
?>