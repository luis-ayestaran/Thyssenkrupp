<?php
   /* require_once('modelo/evento_model.php');
    require_once('modelo/usuario_model.php');*/
    require_once('modelo/imagen_model.php');
    require_once('modelo/opmath_model.php');
    require_once('modelo/cn_model.php');
    require_once('modelo/nc_model.php');
    require_once('modelo/numfracc_model.php');
    require_once('modelo/prob_model.php');
    require_once('modelo/vp_model.php');

    class preguntas_controller{

       /* private $model_u;
        private $model_e;*/
        private $model_img;
        private $model_op_math;
        private $model_cn;
        private $model_nc;
        private $model_numfracc;
        private $model_prob;
        private $model_vp;


        function __construct(){
           /* $this->model_u=new Usuario_model();
            $this->model_e=new Evento_model();
            $this->model_i=new Imagen_model();*/
            $this->model_op_math=new opmath_model();
            $this->model_cn=new cn_model();
            $this->model_nc=new nc_model();
            $this->model_numfracc=new numfracc_model();
            $this->model_prob=new prob_model();
            $this->model_vp=new vp_model();
            $this->model_img=new Imagen_model();
        }

        function opmath(){

            $query=$this->model_op_math->get();
           /* include_once('vistas/header.php');
            include_once('vistas/evento.php');
            include_once('vistas/footer.php');*/
            return $query;
        }
        function cn(){

          $query=$this->model_cn->get();
         /* include_once('vistas/header.php');
          include_once('vistas/evento.php');
          include_once('vistas/footer.php');*/
          return $query;
      }
      function nc(){

        $query=$this->model_nc->get();
       /* include_once('vistas/header.php');
        include_once('vistas/evento.php');
        include_once('vistas/footer.php');*/
        return $query;
    }
    function numfracc(){

        $query=$this->model_numfracc->get();
       /* include_once('vistas/header.php');
        include_once('vistas/evento.php');
        include_once('vistas/footer.php');*/
        return $query;
    }
    function prob(){

        $query=$this->model_prob->get();
       /* include_once('vistas/header.php');
        include_once('vistas/evento.php');
        include_once('vistas/footer.php');*/
        return $query;
    }
    function vp(){

        $query=$this->model_vp->get();
       /* include_once('vistas/header.php');
        include_once('vistas/evento.php');
        include_once('vistas/footer.php');*/
        return $query;
    }

    function index() {
        $operacionesmatematicas=$this->opmath();
        $cadenanumero=$this->cn();
        $numerocadena=$this->nc();
        $fracciones=$this->numfracc();
        $problemas=$this->prob();
        $valorposicional=$this->vp();
        include_once('vistas/contenido/header.php');
        include_once('vistas/index.php');
        include_once('vistas/contenido/footer.php');
    }

  }
?>
