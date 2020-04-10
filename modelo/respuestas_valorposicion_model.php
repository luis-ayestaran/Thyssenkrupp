<?php

    require_once('modelo/model.php');

    class respuestas_valorposicion_model extends Model {

      function get(){
          $sql= 'SELECT * FROM resp_valorposicion ORDER BY id_respuesta ASC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO resp_valorposicion(id_respuesta,respuesta,id_pregunta)VALUES (?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['id_respuesta'],$data['respuesta'],$data['id_pregunta']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM resp_valorposicion where id_respuesta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

    }
?>
