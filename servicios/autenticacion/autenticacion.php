<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    error_reporting(0);
  }
  if(isset($usuario_data)) {
    if($usuario_data['nombre'] != '') {
      $_SESSION['nombre'] = $usuario_data['nombre'];
      $_SESSION['direccion'] = $usuario_data['direccion'];
      $_SESSION['ubicRef'] = $usuario_data['ubicRef'];
      $_SESSION['puesto'] = $usuario_data['puesto'];
      $_SESSION['area'] = $usuario_data['area'];
      $_SESSION['numTel'] = $usuario_data['numTel'];
    } else {
      $_SESSION['nombre'] = '';
      $_SESSION['direccion'] = '';
      $_SESSION['ubicRef'] = '';
      $_SESSION['puesto'] = '';
      $_SESSION['area'] = '';
      $_SESSION['numTel'] = '';
    }
  } else {
    $_SESSION['nombre'] = '';
    $_SESSION['direccion'] = '';
    $_SESSION['ubicRef'] = '';
    $_SESSION['puesto'] = '';
    $_SESSION['area'] = '';
    $_SESSION['numTel'] = '';
  }
?>
