<?php

    require_once('modelo/model.php');

    class respuestas_numerofracc_model extends Model {

      function get(){
          $sql= 'SELECT * FROM resp_numfraccion ORDER BY id_respuesta ASC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO resp_numfraccion(id_respuesta,numerador,id_pregunta,denominador)VALUES (?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['id_respuesta'],$data['numerador'],$data['id_pregunta'],$data['denominador']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM resp_numfraccion where id_respuesta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

    }
?>
