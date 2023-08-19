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

/* ////////// */
.button-container{
    display: flex;
  
    margin-left: 50px;
    margin-top: 20px; 
    width: 200px;
    height: 50px;
    border-radius: 50px;
    background: linear-gradient(135deg, #0097b2, #7ed957);
    box-shadow: 0px 4px 10px rgba(0, 255, 4, 0.2);
    font-size: 20px;
    color: white;
    text-decoration: none;
    
} 

</style>
<body>
    <input type="checkbox" id="check">

    <header>
        <label for="check">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
        </label>
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
        <div class="button-container" style="align-items: center;">
            <a href="../inicio/home.php" class="btn" style="padding: 50px;">IR PARA O PAINEL</a>
        </div>
        </div>
        </body>

</html>