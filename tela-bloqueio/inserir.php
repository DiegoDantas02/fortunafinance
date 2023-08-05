<?php
include "../inc/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$contato = $_POST["contato"];
$senha = $_POST["senha"];

$sql = "insert into cadastro (nome, email, contato, senha) values('$nome', '$email', '$contato', '$senha')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("Location: ../tela-bloqueio/login.php");

?>
