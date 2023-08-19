<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu/sidebarstyle.css">
    <link rel="shortcut icon" href="../img/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,200;1,600&display=swap">

    <title>Menu - Pagína inicial</title>
</head>
<?php include "../inc/conexao.php"; ?>
<style>
    /* RESPONSIVO */
    @media screen and (max-width: 768px) {
    .sidebar {
        width: 100%;
        left: -250px;
    }

    .content {
        background-size: cover;
        background-position: center;
        height: auto;
    }

    .img {
        width: 100%;
        height: auto;
        margin-left: 0;
        margin-top: 20px;
    }

    .titulo {
        font-size: 24px;
    }

    .button-container {
        text-align: center;
        margin-top: 20px;
    }
}   
    /* ////////// */
    
</style>
<!-- headerrr -->
<body>
    <input type="checkbox" id="check">

    <header>
        <!-- <label for="check">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
        </label> -->
        <div class="left">
            <h3>$Fortuna <span>Finance</span></h3>
        </div>
        <div class="right">
            <a href="../tela-bloqueio/login.php" class="sair_btn">Sair</a>
        </div>
        <div style=" color: green; margin-top: 20px; text-align: center;">
            <h1>SEJA BEM VINDO AO SEU GERENCIADOR DE FINANÇAS</h1>
        </div>
    </header>
<!--Fimmm do  headerrr -->

    <div class="sidebar">
        <center>
            <img src="../img/icone.png" alt="" class="image">
            <h2>Usuário $Fortuna</h2>
        </center>
        <a href="../menu/indexsidebar.php"><ion-icon name="home-outline" class="icon"></ion-icon><span>Início</span></a>
        <a href="../inicio/home.php"><ion-icon name="stats-chart-outline" class="icon"></ion-icon><span>Painel</span></a>
        <a href="../sobrenos/sobre.php"><ion-icon name="help-circle-outline" class="icon"></ion-icon><span>Sobre</span></a>
    </div>

    <div class="content">
        <img src="../img/main.png" alt="" class="img">

        <div style="width: auto;height: auto;">
            <p><a href="../inicio/home.php" style="border-radius: 50px; color:white;background: linear-gradient(135deg, #0097b2, #7ed957); text-decoration:none; position: absolute; top: 75%; left: 35%; transform: translate(-50%, -50%);padding: 10px 20px;">IR PARA O PAINEL</a></p>
        </div>
        
    </div>
</body>

</html>