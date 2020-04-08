<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if(!isset($_SESSION['username']) && !isset($_SESSION['contrasena'])) {
    $_SESSION['id_usuario'] = '';
    $_SESSION['nombre'] = '';
    $_SESSION['apellido'] = '';
    $_SESSION['username'] = '';
    $_SESSION['contrasena'] = '';
    $_SESSION['rol'] = '';
  }
?>


<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">                   <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style/css/style.css">                   <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style/css/mapa.css">                   <!-- Bootstrap -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Thyssenkrupp_AG_Logo_2015.svg/1280px-Thyssenkrupp_AG_Logo_2015.svg.png">
    <script src="https://kit.fontawesome.com/e36ade0d45.js" crossorigin="anonymous"></script>   <!-- FontAwesome ()Íconos)-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="servicios/busqueda/texto_predict.js"></script> -->
    <title>ThyssenKrupp</title>
  </head>

  <body>
    <header class="hd-image">
      <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a class="navbar-brand logo" href="index.php?c=preguntas_controller&m=index">
          <h2><b>
            <img src="style/images/thyssenkrupp_logo.png" class="img-fluid" alt="ThyssenKrupp logo" width="50" height="50" style="margin: 0 0.4em;">
            <span style="color: var(--thyssenkrupp);">ThyssenKrupp</span>
          </b></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?c=controller&m=index">Prueba</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="index.php?c=evento_controller&m=mostrar_todos">Instrucciones</a>
            </li>
            <?php if($_SESSION['nombre'] == '') { ?>
            <li class="nav-item">
              <a class="nav-link btn-primary text-light" href="index.php?c=controller&m=login">Regístrate</a>
            </li>
            <?php } else { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn-warning text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo " " . $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?c=usuario_controller&m=cierra_sesion">Cerrar sesión</a>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </header>
