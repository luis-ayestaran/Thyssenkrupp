<?php
    require_once('modelo/usuario_model.php');

    class Usuario_controller{

        private $model_u;
        private $model_p;

        function __construct() {
            $this->model_u=new Usuario_model();
        }

        function usuario() {
            $usuario_data = NULL;
            if(isset($_REQUEST['id_usuario'])){
                $usuario_data=$this->model_u->get_id($_REQUEST['id_usuario']);
            }
            $query=$this->model_u->get();
            include_once('vistas/header.php');
            include_once('vistas/usuario.php');
            include_once('vistas/footer.php');
        }

        function autentica() {
          if(isset($_REQUEST['txt_username']) && isset($_REQUEST['txt_contrasena'])) {
            $usuario_data = NULL;
            $usuario_data = $this->model_u->authenticate($_REQUEST['txt_username'], $_REQUEST['txt_contrasena']);
            if($usuario_data != NULL) {
              include('servicios/autenticacion/autenticacion.php');
              include('vistas/header.php');
              include('vistas/index.php');
              include('vistas/footer.php');
            } else {
              $error_login = "<b>Error de autenticación.</b><p class='font-weight-light'> Usuario o contraseña incorrectos.</p>";
              include_once('vistas/control_usuarios/login.php');
            }
          } else {
            $error_login = "";
            include_once('vistas/control_usuarios/login.php');
          }
        }

        function cierra_sesion() {
          session_start();
          session_unset();
          session_destroy();

          header('Location: index.php?c=controller&m=signup');
        }

        function crea_usuario() {
          session_start();
          if(isset($_SESSION['nombre']) && $_SESSION['nombre'] != '') {
            header('Location: index.php');
          } else {
            if(isset($_REQUEST)) {
              $usuario_data['nombre']=trim(strtoupper($_REQUEST['txt_nombre']));
              $usuario_data['direccion']=trim(strtoupper($_REQUEST['txt_direccion']));
              $usuario_data['ubicRef']=trim(strtoupper($_REQUEST['slct_lugares']));
              $usuario_data['puesto']=trim(strtoupper($_REQUEST['txt_puesto']));
              $usuario_data['area']=trim(strtoupper($_REQUEST['txt_area']));
              $usuario_data['numTel']=trim(strtoupper($_REQUEST['txt_telefono']));
              $this->model_u->create($usuario_data);
              $usuario_data = $this->model_u->find($_REQUEST['txt_nombre']);
              include('servicios/autenticacion/autenticacion.php');
              include('vistas/contenido/header.php');
              include('vistas/contenido/eventos.php');
              include('vistas/footer.php');
            } else {
              header('Location: index.php');
            }
          }
        }
    }
?>
