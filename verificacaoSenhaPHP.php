<?php
include 'conexao.php';
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];
$novaSenha = $_POST['novaSenha'];

if (empty($Email) || empty($Senha) || empty($novaSenha)) {
  echo "<script>alert('É necessario preencher todos os campos!')</script>";
  echo "<script>location.href='pag.php'</script>'";
} else {
  
  $sql = "SELECT * FROM `usuarios` WHERE email='$Email' AND senha='$Senha'";
  $result = $conexao->query($sql);

  if (mysqli_num_rows($result) < 1) {
    echo "<script>alert('Email ou Senha errados, tente novamente')</script>";
    echo "<script>location.href='pag.php'</script>";
  } else {
    $sql = "UPDATE `usuarios` SET `senha`='$novaSenha' WHERE email='$Email'";
    $result = $conexao->query($sql);
    echo "<script>alert('Senha alterada com sucesso!')</script>";
    echo "<script>location.href='pag.php'</script>";
  }
}
