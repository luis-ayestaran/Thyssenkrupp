<?php
  require_once('modelo/imagen_model.php');
  require_once('modelo/opmath_model.php');
  require_once('modelo/cn_model.php');
  require_once('modelo/nc_model.php');
  require_once('modelo/numfracc_model.php');
  require_once('modelo/prob_model.php');
  require_once('modelo/vp_model.php');

  class preguntas_controller{

    private $model_img;
    private $model_op_math;
    private $model_cn;
    private $model_nc;
    private $model_numfracc;
    private $model_prob;
    private $model_vp;

    function __construct(){
        $this->model_op_math=new opmath_model();
        $this->model_cn=new cn_model();
        $this->model_nc=new nc_model();
        $this->model_numfracc=new numfracc_model();
        $this->model_prob=new prob_model();
        $this->model_vp=new vp_model();
        $this->model_img=new Imagen_model();
    }

    /*function get_imagenes() {
      $query=$this->model_img->get();
      return $query;
    }*/

    function opmat() {
        $query=$this->model_op_math->get();
        return $query;
    }

    function get_opmat_imagenes($opmat_preguntas) {
      $opmat_imagenes = array();
      foreach($opmat_preguntas as $pregunta) {
        $imagen = $this->model_img->get_id($pregunta['id_imagen']);
        array_push($opmat_imagenes, $imagen);
      }
      return $opmat_imagenes;
    }

    function cadnum() {
      $query=$this->model_cn->get();
      return $query;
    }

    /*function get_cadnum_imagenes($cadnum_preguntas) {
      $cadnum_imagenes = array();
      foreach($cadnum_preguntas as $pregunta) {
        $imagen = $this->model_img->get_id($pregunta['id_imagen']);
        array_push($cadnum_imagenes, $imagen);
      }
      return $cadnum_imagenes;
    }*/

    function numcad() {
      $query=$this->model_nc->get();
      return $query;
    }

    /*function get_numcad_imagenes($numcad_preguntas) {
      $numcad_imagenes = array();
      foreach($numcad_preguntas as $pregunta) {
        $imagen = $this->model_img->get_id($pregunta['id_imagen']);
        array_push($numcad_imagenes, $imagen);
      }
      return $numcad_imagenes;
    }*/

    function numfracc() {
        $query=$this->model_numfracc->get();
        return $query;
    }

    function get_numfracc_imagenes($numfracc_preguntas) {
      $numfracc_imagenes = array();
      foreach($numfracc_preguntas as $pregunta) {
        $imagen = $this->model_img->get_id($pregunta['id_imagen']);
        array_push($numfracc_imagenes, $imagen);
      }
      return $numfracc_imagenes;
    }

    function prob() {
        $query=$this->model_prob->get();
        return $query;
    }

    function get_prob_imagenes($prob_preguntas) {
      $prob_imagenes = array();
      foreach($prob_preguntas as $pregunta) {
        $imagen = $this->model_img->get_id($pregunta['id_imagen']);
        array_push($prob_imagenes, $imagen);
      }
      return $prob_imagenes;
    }

    function valpos() {
        $query=$this->model_vp->get();
        return $query;
    }

    function get_valpos_imagenes($valpos_preguntas) {
      $valpos_imagenes = array();
      foreach($valpos_preguntas as $pregunta) {
        $imagen = $this->model_img->get_id($pregunta['id_imagen']);
        array_push($valpos_imagenes, $imagen);
      }
      return $valpos_imagenes;
    }

    function index() {
      $operacionesmatematicas = $this->opmat();
      //$imagenes_opmat = $this->get_opmat_imagenes($operacionesmatematicas);
      $cadenanumero = $this->cadnum();
      //$imagenes_cadnum = get_cadnum_imagenes($cadenanumero);
      $numerocadena = $this->numcad();
      //$imagenes_numcad = get_numcad_imagenes($numerocadena);
      $fracciones = $this->numfracc();
      $imagenes_fracc = $this->get_numfracc_imagenes($fracciones);
      $problemas = $this->prob();
      //$imagenes_problem = get_prob_imagenes($problemas);
      $valorposicional = $this->valpos();
      $imagenes_valpos = $this->get_valpos_imagenes($valorposicional);
      include_once('vistas/contenido/header.php');
      include_once('vistas/index.php');
      include_once('vistas/contenido/footer.php');
    }

  }
?>
