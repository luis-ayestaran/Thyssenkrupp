<?php
  require_once('modelo/imagen_model.php');
  require_once('modelo/opmath_model.php');
  require_once('modelo/cn_model.php');
  require_once('modelo/nc_model.php');
  require_once('modelo/numfracc_model.php');
  require_once('modelo/prob_model.php');
  require_once('modelo/vp_model.php');

  class Respuestas_controller {

    private $model_img;
    private $model_op_math;
    private $model_cn;
    private $model_nc;
    private $model_resp_numfracc;
    private $model_resp_prob;
    private $model_vp;

    function __construct(){
        $this->model_rop_math=new resp_opmath_model();
        $this->model_rcn=new resp_cn_model();
        $this->model_rnc=new resp_nc_model();
        $this->model_rresp_numfracc=new resp_resp_numfracc_model();
        $this->model_rresp_prob=new resp_resp_prob_model();
        $this->model_rvp=new resp_vp_model();
    }

    function resp_opmath() {
        $query=$this->model_op_math->get_resp_basicop();
        return $query;
    }

    function resp_cadnum() {
      $query=$this->model_cn->get();
      return $query;
    }

    function resp_numcad() {
      $query=$this->model_nc->get();
      return $query;
    }

    function resp_numfracc() {
        $query=$this->model_resp_numfracc->get();
        return $query;
    }

    function resp_prob() {
        $query=$this->model_resp_prob->get();
        return $query;
    }

    function resp_resp_valorposicional(){
         $query=$this->model_vp->get_resp_valorposicional();
         return $query;
     }

     function porcentaje(){
         $query=$this->model_op_math->get_resp_porcentop();
         return $query;
     }

     function graficas(){
         $query=$this->model_vp->get_resp_graficas();
         return $query;
    }

    function index() {
      session_start();
      if(isset($_SESSION['nombre']) && $_SESSION['nombre'] != '') {
        /*$operacionesmatematicas = $this->resp_opmath();
        $cadenanumero = $this->resp_cadnum();
        $numerocadena = $this->resp_numcad();
        $fracciones = $this->resp_numfracc();
        $fraccionesaux = $fracciones;
        $imagenes_fracc = $this->get_resp_numfracc_imagenes($fraccionesaux);
        $resp_problemas = $this->resp_prob();
        $resp_valorposicional=$this->resp_valorposicional();
        $operacionesporcentaje=$this->porcentaje();
        $graficas=$this->graficas();
        $graficasaux=$graficas;
        $imagenes_valpos = $this->get_valpos_imagenes($graficasaux);*/
        include_once('vistas/contenido/header.php');
        include_once('vistas/contenido/eventos.php');
        include_once('vistas/footer.php');
      } else {
        header("Location: index.php?c=controller&m=signup");
      }
    }

  }
?>
