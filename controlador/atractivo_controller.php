<?php
    require_once('modelo/atractivo_model.php');
    require_once('modelo/opinion_model.php');
    require_once('modelo/usuario_model.php');
    require_once('modelo/imagen_model.php');

    class Atractivo_controller{

        private $model_e;
        private $model_p;
        private $model_o;
        private $model_u;
        private $model_i;

        function __construct(){
            $this->model_e=new Atractivo_model();
            $this->model_o=new Opinion_model();
            $this->model_u=new Usuario_model();
            $this->model_i=new Imagen_model();
        }

        function index(){
          $query=$this->model_e->get();

          include_once('vistas/administracion/atractivos/header.php');
          include_once('vistas/administracion/atractivos/index.php');
          include_once('vistas/administracion/atractivos/footer.php');
        }

        function atractivo() {
          $data=NULL;
          if(isset($_REQUEST['id_atractivo'])) {
              $data=$this->model_e->get_id($_REQUEST['id_atractivo']);
          }
          $query=$this->model_e->get();
          include_once('vistas/administracion/atractivos/header.php');
          include_once('vistas/administracion/atractivos/atractivo.php');
          include_once('vistas/administracion/atractivos/footer.php');
        }



        function get_datosE() {
            //$data['id_atractivo']=$_REQUEST['txt_id_atractivo'];
            $data['nombre_atractivo']=$_REQUEST['nombre_atractivo'];
            $data['descripcion']=$_REQUEST['descripcion'];
            $data['direccion']=$_REQUEST['direccion'];
            if($_REQUEST['thumbnail'] != '') {
              $data['thumbnail'] = $_REQUEST['thumbnail'];
            } else {
              $data['thumbnail'] = 'https://d31dn7nfpuwjnm.cloudfront.net/images/valoraciones/0035/4291/Que_es_Ubigeo.png?1570967337';
            }

            if ($_REQUEST['id_atractivo']=="-1") {
                $this->model_e->create($data);
            }

            if($_REQUEST['id_atractivo']!="-1"){
                $date=$_REQUEST['id_atractivo'];
                $this->model_e->update($data,$date);
            }
            $query=$this->model_e->get();
            include_once('vistas/administracion/atractivos/header.php');
            include_once('vistas/administracion/atractivos/index.php');
            include_once('vistas/administracion/atractivos/footer.php');

        }

        function confirmarDelete(){
          $data=NULL;
          if ($_REQUEST['id_atractivo']!=0) {
             $data=$this->model_e->get_id($_REQUEST['id_atractivo']);
          }
          if ($_REQUEST['id_atractivo']==0) {
            try {
              $date['id_atractivo']=$_REQUEST['txt_id_atractivo'];
              $this->model_e->delete($date['id_atractivo']);
              header("Location: index.php?c=atractivo_controller&m=index");
            } catch(Exception $e) {
              $data=$this->model_e->get_id($_REQUEST['txt_id_atractivo']);
              $error = '<p class="text-center">Tienes IMÁGENES y/o COMENTARIOS asociados al atractivo <b>' . $data['nombre_atractivo'] . '</b>. Asegúrate de eliminarlos primero.</p>';
              $query=$this->model_e->get();
              header("Location: index.php?c=atractivo_controller&m=index&error=$error");
            }
          }
          include_once('vistas/administracion/atractivos/header.php');
          include_once('vistas/administracion/atractivos/confirm.php');
          include_once('vistas/administracion/atractivos/footer.php');
        }

        function mostrar_todos() {
          //include_once('servicios/autenticacion/autenticacion.php');
          if(isset($_REQUEST['txt_buscar']) && $_REQUEST['txt_buscar'] != '') {

            $query=$this->model_e->find($_REQUEST['txt_buscar']);
          } else {
            $query=$this->model_e->get();
          }
          include_once('vistas/header.php');
          include_once('vistas/contenido/atractivos.php');
          include_once('vistas/footer.php');
        }

        function anadir_opinion() {
          $data['fecha'] = date("Y-m-d");
          $data['comentario'] = $_REQUEST['comentario'];
          $data['recomendacion'] = $_REQUEST['recomendacion'];
          if($_REQUEST['id_usuario'] != -1) {
            $data['id_usuario'] = $_REQUEST['id_usuario'];
          } else {
            $data['id_usuario'] = NULL;
          }
          $data['id_evento'] = NULL;
          $data['id_atractivo'] = $_REQUEST['id_atractivo'];
          $data['dir_ip'] = $this->obtener_IP();
          $this->model_o->create($data);
          header("Location: index.php?c=atractivo_controller&m=mostrar_detalle&id_atractivo=" . $data['id_atractivo']);
        }

        function obtener_IP() {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))
              return $_SERVER['HTTP_CLIENT_IP'];

          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
              return $_SERVER['HTTP_X_FORWARDED_FOR'];

          return $_SERVER['REMOTE_ADDR'];
        }

        function mostrar_detalle() {
          $atractivo=$this->model_e->get_id($_REQUEST['id_atractivo']);
          $imagenes=$this->model_i->find_atractivo($_REQUEST['id_atractivo']);
          $op=$this->model_o->find_atractivo($_REQUEST['id_atractivo']);
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
          include_once('vistas/contenido/detalle_atractivo.php');
          include_once('vistas/footer.php');
        }


    }
?>
