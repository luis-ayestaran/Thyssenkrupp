<?php
    require_once('modelo/evento_model.php');
    require_once('modelo/recinto_model.php');
    require_once('modelo/imagen_model.php');
    require_once('modelo/opinion_model.php');
    require_once('modelo/usuario_model.php');

    class Evento_controller{

        private $model_u;
        private $model_e;
        private $model_p;
        private $model_i;
        private $model_o;

        function __construct(){
            $this->model_u=new Usuario_model();
            $this->model_e=new Evento_model();
            $this->model_p=new Recinto_model();
            $this->model_i=new Imagen_model();
            $this->model_o=new Opinion_model();
        }

        function index(){
            $query=$this->model_e->get();

            include_once('vistas/administracion/eventos/header.php');
            include_once('vistas/administracion/eventos/index.php');
            include_once('vistas/administracion/eventos/footer.php');
        }
        function evento(){
            $data=NULL;
            if(isset($_REQUEST['id_evento'])){
                $data=$this->model_e->get_id($_REQUEST['id_evento']);
            }
            $query=$this->model_e->get();
            include_once('vistas/administracion/eventos/header.php');
            include_once('vistas/administracion/eventos/evento.php');
            include_once('vistas/administracion/eventos/footer.php');
        }

        function get_datosE(){
          try {
            //$data['id_atractivo']=$_REQUEST['id_atractivo'];
            $data['nombre_evento']=$_REQUEST['nombre_evento'];
            $data['fecha_inicio']=$_REQUEST['fecha_inicio'];
            $data['fecha_fin']=$_REQUEST['fecha_fin'];
            $data['organizador']=$_REQUEST['organizador'];
            $data['costo']=$_REQUEST['costo'];
            $data['descripcion']=$_REQUEST['descripcion'];
            $data['id_recinto']=$_REQUEST['id_recinto'];
            $data['tipo']=$_REQUEST['tipo'];
            if($_REQUEST['thumbnail'] != '') {
              $data['thumbnail'] = $_REQUEST['thumbnail'];
            } else {
              $data['thumbnail'] = 'https://media.istockphoto.com/vectors/mark-calendar-vector-illustration-flat-style-vector-id1141389244?k=6&m=1141389244&s=170667a&w=0&h=K2eLPD-hjrFBn7j5uxlHRkOL5dvQiPb8hO0PEIG7ACQ=';
            }

            if ($_REQUEST['id_evento']=="-1") {
                $this->model_e->create($data);
            }

            if($_REQUEST['id_evento']!="-1"){
                $date=$_REQUEST['id_evento'];
                $this->model_e->update($data,$date);
            }
            $query=$this->model_e->get();
            include_once('vistas/administracion/eventos/header.php');
            include_once('vistas/administracion/eventos/index.php');
            include_once('vistas/administracion/eventos/footer.php');
          } catch(PDOException $e) {
            $error = '<p class="text-center">Asegúrate de proporcionar <b>fechas en el formato AAAA-MM-DD</b>, y <b>números en el campo costo</b>. También proporciona un <b>ID de recinto válido</b>.</p>';
            header("Location: index.php?c=evento_controller&m=evento&error=$error");
          }
        }

        function imagen_index() {
          $data['id_evento'] = $_REQUEST['id_evento'];
          $query=$this->model_i->find_evento($data['id_evento']);
          include_once('vistas/administracion/imagenes/header.php');
          include_once('vistas/administracion/imagenes/index.php');
          include_once('vistas/administracion/imagenes/footer.php');
        }

        function imagen() {
          $data=NULL;
          if(isset($_REQUEST['id_imagen'])) {
              $data=$this->model_i->get_id($_REQUEST['id_imagen']);
          }
          $query=$this->model_i->get();
          $data['id_evento'] = $_REQUEST['id_evento'];
          include_once('vistas/administracion/imagenes/header.php');
          include_once('vistas/administracion/imagenes/imagen.php');
          include_once('vistas/administracion/imagenes/footer.php');
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
          $data['id_evento'] = $_REQUEST['id_evento'];
          $data['id_atractivo'] = NULL;
          $data['dir_ip'] = $this->obtener_IP();
          $this->model_o->create($data);
          header("Location: index.php?c=evento_controller&m=mostrar_detalle&id_evento=" . $data['id_evento']);
        }

        function obtener_IP() {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))
              return $_SERVER['HTTP_CLIENT_IP'];

          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
              return $_SERVER['HTTP_X_FORWARDED_FOR'];

          return $_SERVER['REMOTE_ADDR'];
        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id_evento']!=0) {
               $data=$this->model_e->get_id($_REQUEST['id_evento']);
            }

            if ($_REQUEST['id_evento']==0) {
              try {
                $date['id_evento']=$_REQUEST['txt_id_evento'];
                $this->model_e->delete($date['id_evento']);
                header("Location: index.php?c=evento_controller&m=index");
              } catch(PDOException $e) {
                $data=$this->model_e->get_id($_REQUEST['txt_id_evento']);
                $error = '<p class="text-center">Tienes IMÁGENES y/o COMENTARIOS asociados al evento <b>' . $data['nombre_evento'] . '</b>. Asegúrate de eliminarlos primero.</p>';
                $query=$this->model_e->get();
                header("Location: index.php?c=evento_controller&m=index&error=$error");
              }
            }

            include_once('vistas/administracion/eventos/header.php');
            include_once('vistas/administracion/eventos/confirm.php');
            include_once('vistas/administracion/eventos/footer.php');
        }

        function mostrar_todos() {
          //include_once('servicios/autenticacion/autenticacion.php');
          $query=$this->model_e->get();
          include_once('vistas/header.php');
          include_once('vistas/contenido/eventos.php');
          include_once('vistas/footer.php');
        }

        function mostrar_detalle() {
          $evento=$this->model_e->get_id($_REQUEST['id_evento']);
          $recinto=$this->model_p->get_id($evento['id_recinto']);
          $imagenes=$this->model_i->find_evento($_REQUEST['id_evento']);
          $op=$this->model_o->find_evento($_REQUEST['id_evento']);
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
          include_once('vistas/contenido/detalle_evento.php');
          include_once('vistas/footer.php');
        }
    }
?>
