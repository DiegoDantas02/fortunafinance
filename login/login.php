<?php
// Faz a conexão com o banco de dados aqui
// Substitua "seu_host", "seu_usuario", "sua_senha" e "seu_banco" pelas informações corretas
// $conn = new mysqli("seu_host", "seu_usuario", "sua_senha", "seu_banco");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Faça a consulta no banco de dados para verificar se o usuário e a senha estão corretos
  // Substitua "users" pelo nome da tabela de usuários
  $query = "SELECT * FROM financa WHERE email='$email' AND senha='$senha'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    // Usuário autenticado com sucesso
    // Você pode redirecionar para uma página de boas-vindas ou executar outras ações aqui
    echo "Login bem-sucedido!";
  } else {
    // Credenciais inválidas
    echo "Usuário ou senha incorretos.";
  }
}
?>

