<?php

    class Controller{

        function __construct(){}

        function index() {
          //include_once('servicios/autenticacion/autenticacion.php');
          include_once('vistas/header.php');
          include_once('vistas/index.php');
          include_once('vistas/footer.php');

        }

        function login() {
          $error_login = "";
          //include_once('vistas/control_usuarios/header.php');
          include_once('vistas/control_usuarios/login.php');
          //include_once('vistas/control_usuarios/footer.php');
        }

        function signup() {
          $error_signup = "";
          include_once('vistas/control_usuarios/header.php');
          include_once('vistas/control_usuarios/signup.php');
          include_once('vistas/control_usuarios/footer.php');
        }

        function events() {
          //include_once('servicios/autenticacion/autenticacion.php');

          include_once('vistas/header.php');
          include_once('vistas/contenido/eventos.php');
          include_once('vistas/footer.php');
        }

        function enclosures() {
          //include_once('servicios/autenticacion/autenticacion.php');
          include_once('vistas/header.php');
          include_once('vistas/contenido/recintos.php');
          include_once('vistas/footer.php');
        }

        function attractions() {
          //include_once('servicios/autenticacion/autenticacion.php');
          include_once('vistas/header.php');
          include_once('vistas/contenido/atractivos.php');
          include_once('vistas/footer.php');
        }

    }
?>
