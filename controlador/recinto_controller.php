<?php
    require_once('modelo/recinto_model.php');
    require_once('modelo/opinion_model.php');
    require_once('modelo/usuario_model.php');
    require_once('modelo/imagen_model.php');

    class Recinto_controller{

        private $model_e;
        private $model_p;
        private $model_o;
        private $model_u;
        private $model_i;

        function __construct(){
            $this->model_e=new Recinto_model();
            $this->model_o=new Opinion_model();
            $this->model_u=new Usuario_model();
            $this->model_i=new Imagen_model();
        }

        function index(){
            $error = '';
            $query =$this->model_e->get();

            include_once('vistas/administracion/recintos/header.php');
            include_once('vistas/administracion/recintos/index.php');
            include_once('vistas/administracion/recintos/footer.php');
        }

        function recinto(){
            $data=NULL;
            if(isset($_REQUEST['id_recinto'])){
                $data=$this->model_e->get_id($_REQUEST['id_recinto']);
            }
            $query=$this->model_e->get();
            include_once('vistas/administracion/recintos/header.php');
            include_once('vistas/administracion/recintos/recinto.php');
            include_once('vistas/administracion/recintos/footer.php');
        }

        function get_datosE(){
            //$data['id_atractivo']=$_REQUEST['id_atractivo'];
            $data['nombre_recinto'] = $_REQUEST['nombre_recinto'];
             $data['capacidad'] = $_REQUEST['capacidad'];
            $data['descripcion'] = $_REQUEST['descripcion'];
            $data['direccion'] = $_REQUEST['direccion'];
            if($_REQUEST['thumbnail'] != '') {
              $data['thumbnail'] = $_REQUEST['thumbnail'];
            } else {
              $data['thumbnail'] = 'https://img.freepik.com/free-vector/business-conference-hall-cartoon_33099-2005.jpg?size=626&ext=jpg';
            }

            if ($_REQUEST['id_recinto']=="-1") {
                $this->model_e->create($data);
            }

            if($_REQUEST['id_recinto']!="-1"){
                $date=$_REQUEST['id_recinto'];
                $this->model_e->update($data,$date);
            }
            $query=$this->model_e->get();
            include_once('vistas/administracion/recintos/header.php');
            include_once('vistas/administracion/recintos/index.php');
            include_once('vistas/administracion/recintos/footer.php');

        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id_recinto']!=0) {
               $data=$this->model_e->get_id($_REQUEST['id_recinto']);
            }

            if ($_REQUEST['id_recinto']==0) {
                try {
                  $date['id_recinto']=$_REQUEST['txt_id_recinto'];
                  $this->model_e->delete($date['id_recinto']);
                  header("Location: index.php?c=recinto_controller&m=index");
                } catch(Exception $e) {
                  $data=$this->model_e->get_id($_REQUEST['txt_id_recinto']);
                  $error = '<p class="text-center">Tienes EVENTOS, IMÁGENES y/o COMENTARIOS asociados al recinto <b>' . $data['nombre_recinto'] . '</b>. Asegúrate de eliminarlos primero.</p>';
                  $query=$this->model_e->get();
                  header("Location: index.php?c=recinto_controller&m=index&error=$error");
                }
            }

            include_once('vistas/administracion/recintos/header.php');
            include_once('vistas/administracion/recintos/confirm.php');
            include_once('vistas/administracion/recintos/footer.php');
        }

        function mostrar_todos() {
          $query=$this->model_e->get();
          include_once('vistas/header.php');
          include_once('vistas/contenido/recintos.php');
          include_once('vistas/footer.php');
        }

        function anadir_opinion() {
          $data['fecha'] = gmdate('Y-m-d');
          $data['comentario'] = $_REQUEST['comentario'];
          $data['recomendacion'] = $_REQUEST['recomendacion'];
          if($_REQUEST['id_usuario'] != -1) {
            $data['id_usuario'] = $_REQUEST['id_usuario'];
          } else {
            $data['id_usuario'] = NULL;
          }
          $data['id_evento'] = NULL;
          $data['id_atractivo'] = NULL;
          $data['dir_ip'] = $this->obtener_IP();
          $data['id_recinto'] = $_REQUEST['id_recinto'];
          $this->model_o->create($data);
          header("Location: index.php?c=recinto_controller&m=mostrar_detalle&id_recinto=" . $data['id_recinto']);
        }

        function obtener_IP() {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))
              return $_SERVER['HTTP_CLIENT_IP'];

          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
              return $_SERVER['HTTP_X_FORWARDED_FOR'];

          return $_SERVER['REMOTE_ADDR'];
        }

        function mostrar_detalle() {
          $recinto=$this->model_e->get_id($_REQUEST['id_recinto']);
          $imagenes=$this->model_i->find_recinto($_REQUEST['id_recinto']);
          $op=$this->model_o->find_recinto($_REQUEST['id_recinto']);
          $opiniones = array();
          $usuarios = array();
          if(isset($op) && !empty($op)) {
            while($opinion = $op->fetch(PDO::FETCH_ASSOC)) {
              if($opinion['id_usuario'] != NULL) {
                $usuario = $this->model_u->get_id($opinion['id_usuario']);
              } else {
                $usuario['nombre'] = 'Anónimo';
                $usuario['apellido'] = '';
              }
              array_push($opiniones, $opinion);
              array_push($usuarios, $usuario);
            }
          }
          include_once('vistas/header.php');
          include_once('vistas/contenido/detalle_recinto.php');
          include_once('vistas/footer.php');
        }

    }
?>
