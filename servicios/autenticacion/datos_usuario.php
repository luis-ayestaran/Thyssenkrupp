<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  error_reporting(0);
}
if(isset($_SESSION['username']) && isset($_SESSION['contrasena'])) {
  $data['id_usuario'] = $_SESSION['id_usuario'];
  $data['nombre'] = $_SESSION['nombre'];
  $data['apellido'] = $_SESSION['apellido'];
  $data['username'] = $_SESSION['username'];
  $data['contrasena'] = $_SESSION['contrasena'];
  $data['rol'] = $_SESSION['rol'];
} else {
  $data['id_usuario'] = '';
  $data['nombre'] = '';
  $data['apellido'] = '';
  $data['username'] = '';
  $data['contrasena'] = '';
  $data['rol'] = '';
}
?>
