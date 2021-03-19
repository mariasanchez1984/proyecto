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
</head>
<body>
<header>
        <div class="container">
            <h1 class="logo"> -Portfolio <span>María S Vielba-</span></h1>
        </div>
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="index.php"><i class="fa fa-home site-nav--icon"></i>Inicio</a></li>
                <li><a href="domestika.php"><i class="fas fa-file-code site-nav--icon"></i>Proyectos</a></li>
                <li><a href="sobre-mi.php"><i class="far fa-address-card site-nav--icon"></i>Sobre mi</a></li>
                <li><a href="contacto.php"><i class="fas fa-user-edit site-nav--icon"></i>Contacto</a></li>
            </ul>
        </nav>
    </header>

<div class="col-5 col-md-4 col-sm-3 col-xs-6 contacto-titulo">
  <h1 class="contacto">-Contacto-</h1>
</div>
    <form action="/gracias/" name="contacto" class="col-7 col-md-6 col-sm-5 col-xs-6 contacto-form">
    <fieldset>
    <legend><strong>Formulario:</strong></legend>
    ¡Hola!
  <label for="name">Me llamo</label>
  <input name="nombre" id="name" type="text" placeholder="Tu nombre"><br>
  <label for="project">Tengo un proyecto de</label>
  <select name="proyecto" id="project"><br>
    <option value="desarrollo">Desarrollo Web</option>
    <option value="maquetacion">Maquetación Web</option>
    <option value="diseno">Diseño Web</option>
    <option value="otro">Otro</option>
  <select><br>
  En el que me gustaría que me ayudaras.
  <label for="email"><br>
  Me puedes escribir a
  </label>
  <input name="email" required id="email" type="email" placeholder="Tu email">.<br>
  ¡Gracias!<br>
</fieldset>
  <br><button type="submit" class="contacto-enviar">Enviar</button>
</form>

<br><a href="index.php" id="backButton"><i class="far fa-arrow-alt-circle-left site-nav--icon"></i></a>
<div class="footer">
        &copy; All rights reserved. <br>Diseño de: María S Vielba
        <a href="contacto.php">Contacto</a>
    </div>
    <script src="nav.js"></script>
</body>
</html>