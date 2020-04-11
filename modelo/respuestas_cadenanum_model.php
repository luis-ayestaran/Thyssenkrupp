<?php

    require_once('modelo/model.php');

    class respuestas_cadenanum_model extends Model {

      function get(){
          $sql= 'SELECT * FROM resp_cadenanumero ORDER BY id_respuesta ASC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO resp_cadenanumero(respUsuario, id_pregunta, id_evaluacion)VALUES (?, ?, ?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['respUsuario'], $data['id_pregunta'], $data['id_evaluacion']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM resp_cadenanumero where id_respuesta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

    }
?>
