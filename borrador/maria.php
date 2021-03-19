<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="maria.css">
    <link rel="stylesheet" href="maria1.css">
    <link rel="stylesheet" href="./includes/fonts/style.css" type="text/css"/>
    <script type="text/javascript" src="jquery-1.7.2.min.js"></script>
    <title>Menu responsive</title>
    <style type="text/css">
        body {
            background-image: url('img/img04.jpg'); 
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <h1 class="logo">-Portfolio <span>María S Vielba-</span></h1>
    </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="maria.php"><i class="fa fa-home site-nav--icon"></i>Inicio</a></li>
                <li><a href="domestika.php"><i class="fas fa-file-code site-nav--icon"></i>Proyectos</a></li>
                <li><a href="sobre-mi.php"><i class="far fa-address-card site-nav--icon"></i>Sobre mi</a></li>
                <li><a href="contacto.php"><i class="fas fa-user-edit site-nav--icon"></i>Contacto</a></li>
            </ul>
        </nav>
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
    <img id="foto1" src="./img/domestika.png" alt="">
  </a>
  <a href="enterprise.php" rel="nofollow">
    <img id="foto2" src="./img/enterprise.png" alt="">
  </a>
  <a href="foro.php" rel="nofollow">
    <img id="foto3" src="./img/foro.jpg" alt="">
  </a>
</div>
    <!--<main class="main">
        <div class="container">
            <div class="entrada">
                <a href="domestika.php" rel="nofollow">
                    <img src="./img/domestika.png" alt="" />
                    <strong>Desarrollo de Aplicaciones con Tecnologías Web:</strong></a>
            </div>
                <p class="parrafo">Enterprise Formación, Madrid</p>
            <div class="entrada">
                <a href="" rel="nofollow">
                    <img src="./img/enterprise.png" alt="" />
                    <strong>Desarrollo de Aplicaciones con Tecnologías Web:</strong></a>
            </div>
                <p class="parrafo">Enterprise Formación, Madrid</p>
            <div class="entrada">
                <a href="" rel="nofollow">
                    <img src="./img/foro.jpg" alt=""/></a>
                    <strong>-Foro Training, Madrid- Administración de Servicios de Internet:</strong>
            </div>
        </div>    
    </main>
    <div id="menu-toggle" class="menu-toggle" onClick="cambiarClase()">
            <div class="hamburger"></div>
        </div>-->

    <div class="footer">
        &copy; All rights reserved. <br>Diseño de: María S Vielba
        <a href="contacto.php">Contacto</a>
    </div>
    <script src="nav.js"></script>
</body>
</html>