<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="./includes/css/style.css">
    <link rel="stylesheet" href="./includes/css/home.css">
    <link rel="stylesheet" href="./includes/fonts/style.css" type="text/css"/>
    <title>Portfolio María S Vielba</title>
    <!--<style type="text/css">
        body {
            background-image: url('./includes/img/img04.jpg'); 
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>-->
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">-Portfolio <span>María S Vielba-</span></h1>
        </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="index.php"><i class="fa fa-home site-nav--icon"></i>Inicio</a></li>
                <li><a href="domestika.php"><i class="fas fa-file-code site-nav--icon"></i>Proyectos</a></li>
                <li><a href="sobre-mi.php"><i class="far fa-address-card site-nav--icon"></i>Sobre mi</a></li>
                <li><a href="contacto.php"><i class="fas fa-user-edit site-nav--icon"></i>Contacto</a></li>
            </ul>
        </nav>
        <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>
    </header>
<div class="home-slide">
  <a href="domestika.php" class="home-subheader"></a>
</div>

<div class="home-slide">
  <a href="enterprise.php" class="home-subheader"></a>
</div>

<div class="home-slide">
  <a href="foro.php" class="home-subheader home-subheader-alt"></a>
</div>

<div class="contenedor">
  <a href="domestika.php" rel="nofollow">
    <img id="foto1" src="./includes/img/domestika.png" alt="">
  </a>
  <a href="enterprise.php" rel="nofollow">
    <img id="foto2" src="./includes/img/enterprise.png" alt="">
  </a>
  <a href="foro.php" rel="nofollow">
    <img id="foto3" src="./includes/img/foro.jpg" alt="">
  </a>
</div>
<div class="footer">
        &copy; All rights reserved. <br>Diseño de: María S Vielba
        <a href="contacto.php">Contacto</a>
    </div>
    <script src="nav.js"></script>
</body>
</html>