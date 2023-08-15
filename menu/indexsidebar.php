<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu/sidebarstyle.css"> 
    <title> Menu Responsivo</title>
</head>

<body>
    <input type="checkbox" id="check">
    

    <header>
        <!-- header começo -->
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
    <!-- header final -->
    
    <!-- Sidebar começo  -->
    <div class="sidebar">
        <center>
            <img src="../img/icone.png" alt="" class="image">
            <h2> Bryan </h2>
        </center>
        <a href="#"><ion-icon name="images-outline"></ion-icon><span>Inicio</span></a>
        <a href="#"><ion-icon name="desktop-outline"></ion-icon><span>Painel</span></a>
        <!-- <a href="#"><ion-icon name="calendar-clear-outline"></ion-icon><span>Galeria</span></a> -->
        <a href="../sobrenos/sobre.php"><ion-icon name="camera-outline"></ion-icon><span>Sobre</span></a>
        <!-- <a href="#"><ion-icon name="settings-outline"></ion-icon><span>Configuração</span></a> -->
    </div>
    
    <!-- Sidebar final  -->
    <div class="content"></div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>