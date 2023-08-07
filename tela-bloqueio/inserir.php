<?php
include "../inc/conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$contato = $_POST["contato"];

$sql = "insert into cadastro (email, senha, nome, contato) values('$email', '$senha', '$nome', '$contato')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("Location: ../inicio/home.php");

?>
