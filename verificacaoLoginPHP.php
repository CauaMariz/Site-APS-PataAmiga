<?php
include 'conexao.php';
$Email = $_POST['EmailLogin'];
$Senha = $_POST['SenhaLogin'];
$novoNomeUser = $_POST['newNameUser'];

if (empty($Email) || empty($Senha) || empty($novoNomeUser)) {
  echo "<script>alert('É necessario preencher todos os campos!')</script>";
  echo "<script>location.href='pag.php'</script>'";
} else {

  $sql = "SELECT * FROM `usuarios` WHERE email='$Email' AND senha='$Senha'";
  $result = $conexao->query($sql);

  $sqlNovoNome = "SELECT * FROM usuarios WHERE nome='$novoNomeUser'";
  $resultNovoNome = $conexao->query($sqlNovoNome);

  if (mysqli_num_rows($resultNovoNome) >= 1) {
    echo "<script>alert('Já existe um usuário com este nome!')</script>";
    echo "<script>location.href='pag.php'</script>'";
  } else {
    if (mysqli_num_rows($result) < 1) {
      echo "<script>alert('Email ou Senha errados, tente novamente')</script>";
      echo "<script>location.href='pag.php'</script>";
    } else {
      $sql = "UPDATE `usuarios` SET `nome`='$novoNomeUser' WHERE email='$Email'";
      $result = $conexao->query($sql);
      echo "<script>alert('Nome de usuário alterado!')</script>";
      echo "<script>location.href='pag.php'</script>";
    }
  }
}
