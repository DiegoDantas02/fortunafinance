<?php
// Faz a conexão com o banco de dados aqui
// $conn = new mysqli("seu_host", "seu_usuario", "sua_senha", "seu_banco");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Insere o novo usuário no banco de dados
  // Substitua "users" pelo nome da tabela de usuários
  $query = "INSERT INTO financa (email, senha) VALUES ('$email', '$senha')";
  $result = $conn->query($query);

  if ($result) {
    echo "Usuário cadastrado com sucesso!";
  } else {
    echo "Falha ao cadastrar o usuário.";
  }
}
?>
