<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu/sidebarstyle.css">
    <!-- Certifique-se de incluir o link para a fonte do Ionicons -->
    
    <title>Menu Responsivo</title>
</head>
<?php include "../inc/conexao.php"; ?>

<body>
    <input type="checkbox" id="check">

    <header>
        <!-- Header começo -->
        <label for="check">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
        </label>
        <div class="left">
            <h3>$Fortuna <span>Finance</span></h3>
        </div>
        <div class="right">
            <a href="../tela-bloqueio/login.php" class="sair_btn">Sair</a>
        </div>
    </header>
    <!-- Header final -->

    <!-- Sidebar começo  -->
    <div class="sidebar">
        <center>
            <img src="../img/icone.png" alt="" class="image">
            <h2>Usuário $Fortuna</h2>
        </center>
        <a href="../menu/indexsidebar.php"><ion-icon name="home-outline" class="icon"></ion-icon><span>Início</span></a>
        <a href="../inicio/home.php"><ion-icon name="stats-chart-outline" class="icon"></ion-icon><span>Painel</span></a>
        <a href="../sobrenos/sobre.php"><ion-icon name="help-circle-outline" class="icon"></ion-icon><span>Sobre</span></a>
    </div>
    
    <!-- Sidebar final  -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <div class="content"></div>
</body>

</html>
