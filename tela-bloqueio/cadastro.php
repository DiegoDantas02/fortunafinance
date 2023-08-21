
<?php include "../inc/conexao.php"; ?>
<link rel="shortcut icon" href="../img/faavmain.png" type="image/x-icon">
<div>
    <a href="../tela-bloqueio/login.php">
        <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">
    </a>
</div>

<head>

<body>
    <link rel="stylesheet" href="../css/cadastro.css">
    </head>
    <body>
<style>
.container {
    width: 350px;
    margin: 0 auto;
    padding: 100px;
    background-color: rgb(255, 255, 255);
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-top: 150px;
    margin-left: center;

}
</style>
        <div class="container">

            <h1 style="color:#45a049"> <strong>CADASTRO</strong> </h1>

            <br>
            <br>
            <br>
            <!-- tela de cadastro -->
            <form action="../tela-bloqueio/login.php" method="post">

                <div class="escrit">E-mail:</div>
                <input type="email" name="email" placeholder="email@fortuna.com.br" class="c2" required>
                <br>

                <div class="escrit">Senha:</div>
                <input type="password" name="senha" placeholder="Senha" required>
                <br>
                <div class="escritas">Nome da Empresa:</div>
                <input type="name" name="nome_da_empresa" placeholder="Fortuna Company" class="c2" required>
                <br>

                <div class="escritas">Número de contato:</div>
                <input type="text" name="contato" id="phone-input" placeholder="celular" class="c2" required>
                <br>
                <br>
                <button type="submit">REGISTRAR</button>
            </form>

            <p>Já tem conta? <a href="../tela-bloqueio/login.php" style="text-decoration: none; color:#4CAF50">Faça Login</a></p>
        </div>


    </body>

    </html>