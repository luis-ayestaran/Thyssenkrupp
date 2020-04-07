<?php

    require_once('modelo/model.php');

    class prob_model extends Model {

      function get(){
          $sql= 'SELECT * FROM problema ORDER BY id_pregunta DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO problema(enunciado,res,id_pregunta,id_evaluacion,id_imagen)VALUES (?,?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['enunciado'],$data['res'],$data['id_pregunta'],$data['id_evaluacion'],$data['id_imagen']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM problema where id_pregunta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }


    }
?>
