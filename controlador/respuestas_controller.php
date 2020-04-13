<?php
  require_once('modelo/evaluacion_model.php');
  require_once('modelo/respuestas_opmatematicas_model.php');
  require_once('modelo/respuestas_cadenanum_model.php');
  require_once('modelo/respuestas_numerocad_model.php');
  require_once('modelo/respuestas_numerofracc_model.php');
  require_once('modelo/respuestas_problemas_model.php');
  require_once('modelo/respuestas_valorposicion_model.php');
  require_once('controlador/preguntas_controller.php');

  class Respuestas_controller {

    private $model_evaluacion;
    private $model_rop_math;
    private $model_rcn;
    private $model_nc;
    private $model_rnumfracc;
    private $model_rprob;
    private $model_vp;
    private $preguntas_controller;

    private $preguntas_opmath;
    private $preguntas_cadnum;
    private $preguntas_numcad;
    private $preguntas_numfracc;
    private $preguntas_prob;
    private $preguntas_valpos;
    private $preguntas_porcent;
    private $preguntas_graf;

    private $aciertos_opmath;
    private $aciertos_cadnum;
    private $aciertos_numcad;
    private $aciertos_numfracc;
    private $aciertos_prob;
    private $aciertos_valpos;
    private $aciertos_porcent;
    private $aciertos_graf;

    private $errores_opmath;
    private $errores_cadnum;
    private $errores_numcad;
    private $errores_numfracc;
    private $errores_prob;
    private $errores_valpos;
    private $errores_porcent;
    private $errores_graf;

    private $aciertos;
    private $num_preg;

    function __construct(){
        $this->model_evaluacion=new evaluacion_model();
        $this->model_rop_math=new respuestas_opmatematicas_model();
        $this->model_rcn=new respuestas_cadenanum_model();
        $this->model_rnc=new respuestas_numerocad_model();
        $this->model_rnumfracc=new respuestas_numerofracc_model();
        $this->model_rprob=new respuestas_problemas_model();
        $this->model_rvp=new respuestas_valorposicion_model();
        $this->preguntas_controller=new preguntas_controller();

        $this->preguntas_opmath = $this->preguntas_controller->opmath();
        $this->preguntas_cadnum = $this->preguntas_controller->cadnum();
        $this->preguntas_numcad = $this->preguntas_controller->numcad();
        $this->preguntas_numfracc = $this->preguntas_controller->numfracc();
        $this->preguntas_prob = $this->preguntas_controller->prob();
        $this->preguntas_valpos = $this->preguntas_controller->valorposicional();
        $this->preguntas_porcent = $this->preguntas_controller->porcentaje();
        $this->preguntas_graf = $this->preguntas_controller->graficas();

        $this->aciertos_opmath = array();
        $this->aciertos_cadnum = array();
        $this->aciertos_numcad = array();
        $this->aciertos_numfracc = array();
        $this->aciertos_prob = array();
        $this->aciertos_valpos = array();
        $this->aciertos_porcent = array();
        $this->aciertos_graf = array();

        $this->errores_opmath = array();
        $this->errores_cadnum = array();
        $this->errores_numcad = array();
        $this->errores_numfracc = array();
        $this->errores_prob = array();
        $this->errores_valpos = array();
        $this->errores_porcent = array();
        $this->errores_graf = array();

        $this->aciertos = 0;
        $this->num_preg = 0;
    }

    // --------------------------- FUNCIONES DE GUARDADO EN LA BD ---------------------------- //

    function registrar_evaluacion() {
      date_default_timezone_set('America/Chicago');
      $evaluacion['fecha'] = date("Y-m-d H:i:s");
      $evaluacion['resultado'] = 0;
      $evaluacion['id_usuario'] = $_SESSION['id_usuario'];
      $this->model_evaluacion->create($evaluacion);
      return $this->model_evaluacion->findByUserAndDate($evaluacion['fecha'], $evaluacion['id_usuario']);
    }

    function registrar_respuestas($evaluacion) {
      $this->registrar_resp_opmath($evaluacion);
      $this->registrar_resp_cadnum($evaluacion);
      $this->registrar_resp_numcad($evaluacion);
      $this->registrar_resp_numfracc($evaluacion);
      $this->registrar_resp_prob($evaluacion);
      $this->registrar_resp_valorposicional($evaluacion);
      $this->registrar_resp_porcentaje($evaluacion);
      $this->registrar_resp_graficas($evaluacion);
    }

    function registrar_resp_opmath($evaluacion) {
      $i = 1;
      $preguntas = $this->preguntas_controller->opmath();
      foreach($preguntas as $pregunta) {
        $respuesta['resultado'] = $_REQUEST['txt_resp_opmat' . strval($i)];
        $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
        $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
        if($respuesta['resultado'] == $pregunta['res']) {

          $acierto['id_pregunta'] = $i;
          $acierto['resp_usuario'] = $respuesta['resultado'];
          $acierto['resp_correcta'] = $pregunta['res'];
          array_push($this->aciertos_opmath, $acierto);
          $this->aciertos++;

        } else {

          $error['id_pregunta'] = $i;
          $error['resp_usuario'] = $respuesta['resultado'];
          $error['resp_correcta'] = $pregunta['res'];
          array_push($this->errores_opmath, $error);

        }
        $this->model_rop_math->create($respuesta);
        $this->num_preg++;
        $i++;
      }
    }

    function registrar_resp_cadnum($evaluacion) {
      $i = 1;
      $preguntas = $this->preguntas_controller->cadnum();
      foreach($preguntas as $pregunta) {
        $respuesta['respUsuario'] = $_REQUEST['txt_resp_cadnum' . strval($i)];
        $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
        $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
        if($respuesta['respUsuario'] == $pregunta['resp']) {

          $acierto['id_pregunta'] = $i;
          $acierto['resp_usuario'] = $respuesta['respUsuario'];
          $acierto['resp_correcta'] = $pregunta['resp'];
          array_push($this->aciertos_cadnum, $acierto);
          $this->aciertos++;

        } else {

          $error['id_pregunta'] = $i;
          $error['resp_usuario'] = $respuesta['respUsuario'];
          $error['resp_correcta'] = $pregunta['resp'];
          array_push($this->errores_cadnum, $error);

        }
        $this->model_rcn->create($respuesta);
        $this->num_preg++;
        $i++;
      }
    }

    function registrar_resp_numcad($evaluacion) {
      $i = 1;
      $preguntas = $this->preguntas_controller->numcad();
      foreach($preguntas as $pregunta) {
        $respuesta['respUsuario'] = strtoupper(trim($_REQUEST['txt_resp_numcad' . strval($i)]));
        $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
        $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
        if(strtoupper(trim($respuesta['respUsuario'])) == strtoupper(trim($pregunta['resp']))) {

          $acierto['id_pregunta'] = $i;
          $acierto['resp_usuario'] = $respuesta['respUsuario'];
          $acierto['resp_correcta'] = $pregunta['resp'];
          array_push($this->aciertos_numcad, $acierto);
          $this->aciertos++;

        } else {

          $error['id_pregunta'] = $i;
          $error['resp_usuario'] = $respuesta['respUsuario'];
          $error['resp_correcta'] = $pregunta['resp'];
          array_push($this->errores_numcad, $error);

        }
        $this->model_rnc->create($respuesta);
        $this->num_preg++;
        $i++;
      }
    }

    function registrar_resp_numfracc($evaluacion) {
      $i = 1;
      $preguntas = $this->preguntas_controller->numfracc();
      foreach($preguntas as $pregunta) {
        $respuesta['numerador'] = $_REQUEST['txt_num_numfracc' . strval($i)];
        $respuesta['denominador'] = $_REQUEST['txt_den_numfracc' . strval($i)];
        $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
        $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
        if($respuesta['numerador'] == $pregunta['numerador'] &&
            $respuesta['denominador'] == $pregunta['denominador']) {

          $acierto['id_pregunta'] = $i;
          $acierto['numerador_usuario'] = $respuesta['numerador'];
          $acierto['denominador_usuario'] = $respuesta['denominador'];
          $acierto['numerador_correcto'] = $pregunta['numerador'];
          $acierto['denominador_correcto'] = $pregunta['denominador'];
          array_push($this->aciertos_numfracc, $acierto);
          $this->aciertos++;

        } else {

          $error['id_pregunta'] = $i;
          $error['numerador_usuario'] = $respuesta['numerador'];
          $error['denominador_usuario'] = $respuesta['denominador'];
          $error['numerador_correcto'] = $pregunta['numerador'];
          $error['denominador_correcto'] = $pregunta['denominador'];
          array_push($this->errores_numfracc, $error);

        }
        $this->model_rnumfracc->create($respuesta);
        $this->num_preg++;
        $i++;
      }
    }

    function registrar_resp_prob($evaluacion) {
      $i = 1;
      $preguntas = $this->preguntas_controller->prob();
      foreach($preguntas as $pregunta) {
        $respuesta['respuesta'] = $_REQUEST['txt_resp_prob' . strval($i)];
        $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
        $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
        if($respuesta['respuesta'] == $pregunta['res']) {

          $acierto['id_pregunta'] = $i;
          $acierto['resp_usuario'] = $respuesta['respuesta'];
          $acierto['resp_correcta'] = $pregunta['res'];
          array_push($this->aciertos_prob, $acierto);
          $this->aciertos++;

        } else {

          $error['id_pregunta'] = $i;
          $error['resp_usuario'] = $respuesta['respuesta'];
          $error['resp_correcta'] = $pregunta['res'];
          array_push($this->errores_prob, $error);

        }
        $this->model_rprob->create($respuesta);
        $this->num_preg++;
        $i++;
      }
    }

    function registrar_resp_valorposicional($evaluacion) {
        $i = 1;
        $preguntas = $this->preguntas_controller->valorposicional();
        foreach($preguntas as $pregunta) {
          $respuesta['respuesta'] = strtoupper(trim($_REQUEST['txt_resp_valpos' . strval($i)]));
          $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
          $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
          if(strtoupper(trim($respuesta['respuesta'])) == strtoupper(trim($pregunta['resp']))) {

            $acierto['id_pregunta'] = $i;
            $acierto['resp_usuario'] = $respuesta['respuesta'];
            $acierto['resp_correcta'] = $pregunta['resp'];
            array_push($this->aciertos_valpos, $acierto);
            $this->aciertos++;

          } else {

            $error['id_pregunta'] = $i;
            $error['resp_usuario'] = $respuesta['respuesta'];
            $error['resp_correcta'] = $pregunta['resp'];
            array_push($this->errores_valpos, $error);

          }
          $this->model_rvp->create($respuesta);
          $this->num_preg++;
          $i++;
        }
     }

     function registrar_resp_porcentaje($evaluacion) {
       $i = 1;
       $preguntas = $this->preguntas_controller->porcentaje();
       foreach($preguntas as $pregunta) {
         $respuesta['resultado'] = $_REQUEST['txt_resp_opporcent' . strval($i)];
         $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
         $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
         if($respuesta['resultado'] == $pregunta['res']) {

           $acierto['id_pregunta'] = $i;
           $acierto['resp_usuario'] = $respuesta['resultado'];
           $acierto['resp_correcta'] = $pregunta['res'];
           array_push($this->aciertos_porcent, $acierto);
           $this->aciertos++;

         } else {

           $error['id_pregunta'] = $i;
           $error['resp_usuario'] = $respuesta['resultado'];
           $error['resp_correcta'] = $pregunta['res'];
           array_push($this->errores_porcent, $error);

         }
         $this->model_rop_math->create($respuesta);
         $this->num_preg++;
         $i++;
       }
     }

     function registrar_resp_graficas($evaluacion) {
       $i = 1;
       $preguntas = $this->preguntas_controller->graficas();
       foreach($preguntas as $pregunta) {
         $respuesta['respuesta'] = strtoupper(trim($_REQUEST['txt_resp_graf' . strval($i)]));
         $respuesta['id_pregunta'] = $pregunta['id_pregunta'];
         $respuesta['id_evaluacion'] = $evaluacion['id_evaluacion'];
         if(strtoupper(trim($respuesta['respuesta'])) == strtoupper(trim($pregunta['resp']))) {

           $acierto['id_pregunta'] = $i;
           $acierto['resp_usuario'] = $respuesta['respuesta'];
           $acierto['resp_correcta'] = $pregunta['resp'];
           array_push($this->aciertos_graf, $acierto);
           $this->aciertos++;

         } else {

           $error['id_pregunta'] = $i;
           $error['resp_usuario'] = $respuesta['respuesta'];
           $error['resp_correcta'] = $pregunta['resp'];
           array_push($this->errores_graf, $error);

         }
         $this->model_rvp->create($respuesta);
         $this->num_preg++;
         $i++;
       }
     }

     // ------------------------------- MÉTODOS PARA CALIFICAR EL EXAMEN -------------------------------------- //

     function calificar_examen(&$evaluacion) {
       $evaluacion['resultado'] = ($this->aciertos * 10) / $this->num_preg;
       $this->model_evaluacion->update($evaluacion, $evaluacion['id_evaluacion']);
     }

     // ------------------------------- MÉTODOS PARA MOSTRAR RESULTADOS -------------------------------------- //

    function mostrar_resultados() {
      session_start();
      error_reporting(-1);
      if(isset($_SESSION['nombre']) && $_SESSION['nombre'] != '') {
        if(isset($_REQUEST['txt_resp_opmat1'])) {
          $evaluacion = $this->registrar_evaluacion();
          $this->registrar_respuestas($evaluacion);
          $this->calificar_examen($evaluacion);
          $aciertos_opmatematicas = $this->aciertos_opmath;
          $aciertos_cadenanum = $this->aciertos_cadnum;
          $aciertos_numerocad = $this->aciertos_numcad;
          $aciertos_numerofracc = $this->aciertos_numfracc;
          $aciertos_problemas = $this->aciertos_prob;
          $aciertos_valorpos = $this->aciertos_valpos;
          $aciertos_porcentajes = $this->aciertos_porcent;
          $aciertos_graficas = $this->aciertos_graf;

          $errores_opmatematicas = $this->errores_opmath;
          $errores_cadenanum = $this->errores_cadnum;
          $errores_numerocad = $this->errores_numcad;
          $errores_numerofracc = $this->errores_numfracc;
          $errores_problemas = $this->errores_prob;
          $errores_valorpos = $this->errores_valpos;
          $errores_porcentajes = $this->errores_porcent;
          $errores_graficas = $this->errores_graf;
          include('vistas/contenido/header.php');
          include('vistas/contenido/resultados.php');
          include('vistas/footer.php');
        } else {
          header("Location: index.php?c=usuario_controller&m=cierra_sesion");
        }
      } else {
        header("Location: index.php?c=controller&m=signup");
      }
    }

  }
?>
