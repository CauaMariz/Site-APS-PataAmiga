<?php
include 'conexao.php';

$Email = $_POST['Email'];
$Senha = $_POST['Senha'];
$novoEmail = $_POST['novoEmail'];

if (empty($Email) || empty($Senha) || empty($novoEmail)) {
  echo "<script>alert('É necessario preencher todos os campos!')</script>";
  echo "<script>location.href='pag.php'</script>'";
} else {
  $sql = "SELECT * FROM usuarios WHERE email='$Email' AND senha='$Senha'";
  $result = $conexao->query($sql);

  $sqlNovoEmail = "SELECT * FROM usuarios WHERE email='$novoEmail'";
  $resultNovoEmail = $conexao->query($sqlNovoEmail);

  if (mysqli_num_rows($resultNovoEmail) >= 1) {
    echo "<script>alert('Já existe um usuário com este email!')</script>";
    echo "<script>location.href='pag.php'</script>'";
  } 
  else {
    if (mysqli_num_rows($result) < 1) {
      echo "<script>alert('Email ou senha errados. Tente novamente!')</script>";
      echo "<script>location.href='pag.php'</script>'";
    } else {
      $sql = "UPDATE usuarios SET email='$novoEmail' WHERE email='$Email'";

      $result = $conexao->query($sql);

      echo "<script>alert('Email alterado com sucesso!')</script>";
      echo "<script>location.href='pag.php'</script>'";
    }
  }
}
