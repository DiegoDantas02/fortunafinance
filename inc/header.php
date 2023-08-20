<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/faavmain.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <style>
        /* Estilos para tornar o cabeçalho responsivo */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: black;
            /* Fundo preto */
            color: white;
            /* Texto branco */
            padding: 5px;
            width: 1800px;
            display: flex;
            justify-content: space-between;
            position: fixed;
            /* Torna o cabeçalho fixo */
            top: 0;
            /* Fixa no topo da página */
            width: 100%;
            /* Faz o cabeçalho ocupar toda a largura */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* Box shadow com deslocamento X, deslocamento Y, raio e cor */
        }

        .logo {
            max-width: 500px;
            height: auto;
        }

        .buttons {
            margin-top: -9px;
            gap: 10px;
        }

        .buttons a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 20px;
            color: #fff;
        }

        /* Cor de fundo botão "Início" */
        .buttons a:nth-child(1) {
            background-color: green;
        }

        /* Cor de fundo botão "Sair" */
        .buttons a:nth-child(2) {
            background-color: #555;
            transition: 0.3s;
            /* Adicionado para criar um efeito de destaque no botão "Início" */
        }

        /* Cor de fundo botão "Sair" no hover */
        .buttons a:nth-child(2):hover {
            background-color: #555;
            
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
/* header */
        header {
            position: fixed;
            background: #073816;
            padding: 30px;
            width: 100%;
            height: 30px;
            box-shadow: 0px 4px 10px rgba(0, 255, 4, 0.3);
            

        }

        .left h3 {
            color: #eaff00;
            margin: 0;
            text-transform: uppercase;
            font-size: 25px;
            font-weight: 800;
            margin-top: -11.3px;
            text-decoration: none;
        }

        .left span {
            color: #ffffff;
            text-decoration: none;
        }
        /* fim header */
    </style>
</head>

<body>
    <header>
            <!-- <img src="../img/logo.png" alt="Logo" class="logo"> -->
            <div class="left" style="text-decoration: none;">
                <a  href="../inicio/home.php" style="text-decoration: none;"><h3>$Fortuna <span>Finance</span></h3></a>
    
            </div>

        <div class="buttons">
            <a href="../menu/indexsidebar.php">Início</a>
            <a href="../tela-bloqueio/login.php">Sair</a>
        </div>
    </header>

</body>

</html>