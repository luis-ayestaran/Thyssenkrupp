<?php

    require_once('modelo/model.php');

    class nc_model extends Model {

      function get(){
          $sql= 'SELECT * FROM numerocadena ORDER BY id_pregunta DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO numerocadena(num,res,id_pregunta,id_evaluacion)VALUES (?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['num'],$data['res'],$data['id_pregunta'],$data['id_evaluacion']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM numerocadena where id_pregunta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }


    }
?>
