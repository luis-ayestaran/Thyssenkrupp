<?php

    require_once('modelo/model.php');

    class evaluacion_model extends Model {

      function get(){
          $sql= 'SELECT * FROM evaluacion ORDER BY id_evaluacion ASC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO evaluacion(fecha,resultado,id_usuario) VALUES (?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['fecha'],$data['resultado'],$data['id_usuario']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM evaluacion where id_evaluacion = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function findByUserAndDate($fecha, $id_usuario) {
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM evaluacion WHERE fecha = ? AND id_usuario = ?";
        $q = $this->DB->prepare($sql);
        $q->execute(array($fecha, $id_usuario));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
      }

      function update($data, $id) {
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE evaluacion SET resultado = ? WHERE id_evaluacion = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($data['resultado'], $id));
          Database::disconnect();
      }

    }
?>
