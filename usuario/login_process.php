<?php

include '../config.php';

// login_process.php
session_start();

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Verifique as credenciais do usuário no banco de dados
  // Você pode usar uma consulta SQL para recuperar o usuário com base no nome de usuário e verificar a senha
  // Aqui está um exemplo básico usando uma tabela "usuarios" com campos "username" e "senha"
  $query = "SELECT * FROM usuarios WHERE username = '$username'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // Verifique se a senha fornecida corresponde à senha armazenada no banco de dados
    if (md5($password) == $user['password']) {
      // Autenticação bem-sucedida, inicie a sessão e redirecione para a página desejada
      $_SESSION["username"] = $username;
      $_SESSION["nivel_acesso"] = $user['nivel_acesso'];
      // header("Location: ../dashboard.php");
      // echo '<script>alert("Senha correta, logado!!.");</script>';

      echo "<script>alert(\"Senha correta, logado!!.\")</script>";
      echo "<script>setTimeout(function(){ window.location.href = '../dashboard.php'; }, 0);</script>";

      exit();
    } else {
      // Senha incorreta, exiba uma mensagem de erro
      $loginError = "Senha incorreta. Por favor, tente novamente.";

      echo "<script>alert(\"Senha incorreta. Por favor, tente novamente!\")</script>";
      echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 0);</script>";

    }
  } else {
    // Nome de usuário não encontrado, exiba uma mensagem de erro
    $loginError = "Nome de usuário não encontrado. Por favor, tente novamente.";

    echo "<script>alert(\"Nome de usuário não encontrado. Por favor, tente novamente!\")</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../index.php'; }, 0);</script>";

}
}

?>