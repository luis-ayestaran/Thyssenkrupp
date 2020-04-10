<?php

    require_once('bd/conexion.php');
    require_once('controlador/usuario_controller.php');
    require_once('controlador/evento_controller.php');
    require_once('controlador/preguntas_controller.php');
    require_once('controlador/respuestas_controller.php');
    require_once('controlador/controller.php');
    /*require_once('controlador/atractivo_controller.php');
    require_once('controlador/recinto_controller.php');
    require_once('controlador/imagen_controller.php');*/
    /*$atractivo_controller = new Atractivo_controller();
    $recinto_controller = new Recinto_controller();
    $imagen_controller = new Imagen_controller();*/
    $controller = new Controller();
    $evento_controller = new Evento_controller();
    $usuario_controller = new Usuario_controller();
    $preguntas_controller = new preguntas_controller();
    $respuestas_controller = new Respuestas_controller();

    if(!empty($_REQUEST['c'])) {
      $controlador = $_REQUEST['c'];
      if(!empty($_REQUEST['m'])) {
          $metodo=$_REQUEST['m'];
          if (method_exists($controlador, $metodo)) {
            $$controlador->$metodo();
          } else {
            $controller->signup();
          }
      } else {
        $controller->signup();
      }
    } else {
      $controller->signup();
    }

?>
