<?php

    class Controller{

        function __construct(){}

        function index() {
          session_start();
          if(isset($_SESSION['nombre']) && $_SESSION['nombre'] != '') {
            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
          } else {
            include('vistas/control_usuarios/header.php');
            include('vistas/control_usuarios/signup.php');
            include('vistas/control_usuarios/footer.php');
          }

        }
        
        function signup() {
          session_start();
          if(isset($_SESSION['nombre']) && $_SESSION['nombre'] != '') {
            include('vistas/contenido/header.php');
            include('vistas/contenido/eventos.php');
            include('vistas/footer.php');
          } else {
            include('vistas/control_usuarios/header.php');
            include('vistas/control_usuarios/signup.php');
            include('vistas/control_usuarios/footer.php');
          }
        }

    }
?>
