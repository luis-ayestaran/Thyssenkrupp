<?php

    require_once('modelo/model.php');

    class Atractivo_model extends Model {

      function get() {
          $sql= 'SELECT * FROM atractivo ORDER BY id_atractivo DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO atractivo(nombre_atractivo,descripcion,direccion,thumbnail) VALUES (?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['nombre_atractivo'],$data['descripcion'],$data['direccion'],$data['thumbnail']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM atractivo WHERE id_atractivo = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find($nombre_atractivo){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM atractivo WHERE nombre_atractivo = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($nombre_atractivo));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function update($data,$date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE atractivo SET nombre_atractivo=?, descripcion=?,direccion=?,thumbnail=? WHERE id_atractivo=?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($data['nombre_atractivo'],$data['descripcion'],$data['direccion'],$data['thumbnail'], $date));
          Database::disconnect();

      }

      function delete($date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="DELETE FROM atractivo where id_atractivo=?";
          $q=$this->DB->prepare($sql);
          $q->execute(array($date));
          Database::disconnect();
      }
    }
?>
