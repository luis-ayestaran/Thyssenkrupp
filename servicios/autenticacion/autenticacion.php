<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    error_reporting(0);
  }
  if(isset($usuario_data)) {
    if($usuario_data['username'] != '' && $usuario_data['contrasena'] != '') {
      $_SESSION['id_usuario'] = $usuario_data['id_usuario'];
      $_SESSION['nombre'] = $usuario_data['nombre'];
      $_SESSION['apellido'] = $usuario_data['apellido'];
      $_SESSION['username'] = $usuario_data['username'];
      $_SESSION['contrasena'] = $usuario_data['contrasena'];
      $_SESSION['rol'] = $usuario_data['rol'];
    } else {
      $_SESSION['id_usuario'] = '';
      $_SESSION['nombre'] = '';
      $_SESSION['apellido'] = '';
      $_SESSION['username'] = '';
      $_SESSION['contrasena'] = '';
      $_SESSION['rol'] = '';
    }
  } else {
    $_SESSION['id_usuario'] = '';
    $_SESSION['nombre'] = '';
    $_SESSION['apellido'] = '';
    $_SESSION['username'] = '';
    $_SESSION['contrasena'] = '';
    $_SESSION['rol'] = '';
  }
?>
