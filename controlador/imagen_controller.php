<?php
    require_once('modelo/atractivo_model.php');
    require_once('modelo/evento_model.php');
    require_once('modelo/recinto_model.php');
    require_once('modelo/opinion_model.php');
    require_once('modelo/usuario_model.php');

    class Imagen_controller{

        private $model_a;
        private $model_u;
        private $model_e;
        private $model_p;
        private $model_i;
        private $model_o;

        function __construct(){
            $this->model_a=new Atractivo_model();
            $this->model_u=new Usuario_model();
            $this->model_e=new Evento_model();
            $this->model_p=new Recinto_model();
            $this->model_i=new Imagen_model();
            $this->model_o=new Opinion_model();
        }

        function index(){
            $query=$this->model_i->get();

            include_once('vistas/administracion/imagenes/header.php');
            include_once('vistas/administracion/imagenes/index.php');
            include_once('vistas/administracion/imagenes/footer.php');
        }

        function imagen(){
            $data=NULL;
            if(isset($_REQUEST['id_imagen'])){
                $data=$this->model_i->get_id($_REQUEST['id_imagen']);
            }
            //$query=$this->model_i->get();
            include_once('vistas/administracion/imagenes/header.php');
            include_once('vistas/administracion/imagenes/imagen.php');
            include_once('vistas/administracion/imagenes/footer.php');
        }

        function get_datosE(){
          try {
            //$data['id_atractivo']=$_REQUEST['id_atractivo'];
            if($_REQUEST['url'] != '') {
              $data['url']=$_REQUEST['url'];
            } else {
              $data['url']="https://cdn0.iconfinder.com/data/icons/thin-photography/57/thin-363_photo_image_album-512.png";
            }
            $data['descripcion']=$_REQUEST['descripcion'];
            if(isset($_REQUEST['id_evento']) && $_REQUEST['id_evento'] != '') {
              $evento = $this->model_e->get_id($_REQUEST['id_evento']);
              $data['id_evento']=$_REQUEST['id_evento'];
            } else {
              $data['id_evento']=NULL;
            }
            if(isset($_REQUEST['id_atractivo']) && $_REQUEST['id_atractivo'] != '') {
              $evento = $this->model_a->get_id($_REQUEST['id_atractivo']);
              $data['id_atractivo']=$_REQUEST['id_atractivo'];
            } else {
              $data['id_atractivo']=NULL;
            }
            if(isset($_REQUEST['id_usuario']) && $_REQUEST['id_usuario'] != '') {
              $data['id_usuario']=$_REQUEST['id_usuario'];
            } else {
              $data['id_usuario']=NULL;
            }
            if(isset($_REQUEST['id_recinto']) && $_REQUEST['id_recinto'] != '') {
              $evento = $this->model_p->get_id($_REQUEST['id_recinto']);
              $data['id_recinto']=$_REQUEST['id_recinto'];
            } else {
              $data['id_recinto']=NULL;
            }

            if ($_REQUEST['id_imagen']=="-1") {
                $this->model_i->create($data);
            }

            if($_REQUEST['id_imagen']!="-1"){
                $date=$_REQUEST['id_imagen'];
                $this->model_i->update($data,$date);
            }
            $query=$this->model_i->get();
            include_once('vistas/administracion/imagenes/header.php');
            include_once('vistas/administracion/imagenes/index.php');
            include_once('vistas/administracion/imagenes/footer.php');
          } catch(PDOException $e) {
            $error = '<p class="text-center">Al parecer proporcionaste un <b>ID de evento, atractivo o recinto</b> que <b>no existe</b>. Ingresa uno válido, por favor</p>';
            $query=$this->model_e->get();
            header("Location: index.php?c=imagen_controller&m=imagen&error=$error");
          }
        }

        /*function imagen() {
          $data=NULL;
          if(isset($_REQUEST['id_imagen'])) {
              $data=$this->model_i->get_id($_REQUEST['id_imagen']);
          }
          $query=$this->model_i->get();
          $data['id_imagen'] = $_REQUEST['id_imagen'];
          include_once('vistas/administracion/imagenes/header.php');
          include_once('vistas/administracion/imagenes/imagen.php');
          include_once('vistas/administracion/imagenes/footer.php');
        }*/

        function anadir_imagen() {

        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id_imagen']!=0) {
               $data=$this->model_i->get_id($_REQUEST['id_imagen']);
            }

            if ($_REQUEST['id_imagen']==0) {
                $date['id_imagen']=$_REQUEST['txt_id_imagen'];
                $this->model_i->delete($date['id_imagen']);

                header("Location: index.php?c=imagen_controller&m=index");
            }

            include_once('vistas/administracion/imagenes/header.php');
            include_once('vistas/administracion/imagenes/confirm.php');
            include_once('vistas/administracion/imagenes/footer.php');
        }
    }
?>
