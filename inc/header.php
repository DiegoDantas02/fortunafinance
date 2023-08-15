<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <style>
        /* Estilos para tornar o cabeçalho responsivo */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: black; /* Fundo preto */
            color: white; /* Texto branco */
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            max-width: 100px;
            height: auto;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .buttons a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
        }

        .buttons a:nth-child(1) {
            background-color: green;
        }

        .buttons a:nth-child(2) {
            background-color: #333;
        }

        @media screen and (max-width: 768px) {
            .logo {
                max-width: 80px;
            }

            .buttons {
                flex-direction: column;
                gap: 5px;
            }

            .buttons a {
                padding: 5px;
            }
        }
    </style>
    <title>Controle de despesas</title>
</head>

<body>
    <header>
        <a href="../inicio/home.php">
            <img src="../img/logo.png" alt="Logo" class="logo">
        </a>
        <div class="buttons">
            <a href="../inicio/home.php">Início</a>
            <a href="../tela-bloqueio/login.php">Sair</a>
        </div>
    </header>
    <!-- Resto do conteúdo da página -->
</body>

</html>
