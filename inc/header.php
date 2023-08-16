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
            padding: 5px;
            width: 1800px;
            display: flex;
            justify-content: space-between;
            position: fixed; /* Torna o cabeçalho fixo */
            top: 0; /* Fixa no topo da página */
            width: 100%; /* Faz o cabeçalho ocupar toda a largura */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow com deslocamento X, deslocamento Y, raio e cor */
        }

        .logo {
            max-width: 500px;
            height: auto;
        }

        .buttons {
            margin-top: 20px;
            gap: 10px;
        }

        .buttons a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 20px;
            color: #fff;
        }
        /* cor de fundo botão inicio */
        .buttons a:nth-child(1) {
            background-color: green;
        }

        .buttons a:nth-child(2) {
            background-color:#555;
            transition: 0.3s; /* Adicionado para criar um efeito de destaque botão inicio */
        }

        .buttons a:nth-child(3):hover {
            background-color: #555; /* Nova cor quando o mouse passa por cima botão sair */
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
    
</head>

<body>
    <header>
        <a href="../inicio/home.php">
            <img src="../img/logo.png" alt="Logo" class="logo">
        </a>
        <div class="buttons">
            <a href="../menu/indexsidebar.php">Início</a>
            <a href="../tela-bloqueio/login.php">Sair</a>
        </div>
    </header>
    <!-- Resto do conteúdo da página -->
</body>

</html>
