<?php
session_start();

if (empty($_POST["Senha"]) || empty($_POST["Email"]) || empty($_POST['Nome'])) {
  echo "<script>alert('É necessário preencher todos os campos')</script>";
  echo "<script>location.href='Cadastro.php'</script>";
}

include 'conexao.php';

$Email = $_POST['Email'];
$Senha = $_POST['Senha'];
$Nome = $_POST['Nome'];

$sql = "SELECT * FROM usuarios WHERE email='$Email' AND senha='$Senha' AND nome = '$Nome'";

$ConfigSQL = $conexao->query($sql);

if (mysqli_num_rows($ConfigSQL) < 1) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  echo "<script>alert('Verifique seus dados e tente novamente')</script>";
  echo "<script>location.href='login.php'</script>";
} else {

  $_SESSION['email'] = $Email;
  $_SESSION['senha'] = $Senha;
  $_SESSION['nome'] = $Nome;

  echo "<script>alert('Login realizado com sucesso!')</script>";
  echo "<script>location.href='home.php'</script>";
}
