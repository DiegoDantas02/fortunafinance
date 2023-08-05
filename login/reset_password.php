<?php
// Faz a conexão com o banco de dados aqui
// $conn = new mysqli("seu_host", "seu_usuario", "sua_senha", "seu_banco");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $new_password = $_POST["new_password"];

  // Atualiza a senha no banco de dados para o usuário fornecido
  // Substitua "users" pelo nome da tabela de usuários
  $query = "UPDATE financa SET password='$new_password' WHERE email='$email'";
  $result = $conn->query($query);

  if ($result) {
    echo "Senha redefinida com sucesso!";
  } else {
    echo "Falha ao redefinir a senha.";
  }
}
?>
