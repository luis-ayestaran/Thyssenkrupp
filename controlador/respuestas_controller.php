<?php
  require_once('modelo/respuestas_opmatematicas_model.php');
  require_once('modelo/respuestas_cadenanum_model.php');
  require_once('modelo/respuestas_numerocad_model.php');
  require_once('modelo/respuestas_numerofracc_model.php');
  require_once('modelo/respuestas_problemas_model.php');
  require_once('modelo/respuestas_valorposicion_model.php');

  class Respuestas_controller {

    private $model_op_math;
    private $model_cn;
    private $model_nc;
    private $model_resp_numfracc;
    private $model_resp_prob;
    private $model_vp;

    function __construct(){
        $this->model_rop_math=new respuestas_opmatematicas_model();
        $this->model_rcn=new respuestas_cadenanum_model();
        $this->model_rnc=new respuestas_numerocad_model();
        $this->model_rresp_numfracc=new respuestas_numerofracc_model();
        $this->model_rresp_prob=new respuestas_problemas_model();
        $this->model_rvp=new respuestas_valorposicion_model();
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
