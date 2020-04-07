<?php

    require_once('modelo/model.php');

    class Recinto_model extends Model {

      function get() {
          $sql= 'SELECT * FROM recinto ORDER BY id_recinto DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data) {

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO recinto(nombre_recinto,capacidad,descripcion,direccion,thumbnail) VALUES (?,?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['nombre_recinto'],$data['capacidad'],$data['descripcion'],$data['direccion'],$data['thumbnail']));
          Database::disconnect();

      }

      function get_id($id) {
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM recinto WHERE id_recinto = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find($nombre_atractivo){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM recinto WHERE nombre_recinto = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($nombre_atractivo));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function update($data,$date) {
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE recinto  set  nombre_recinto=?, capacidad =?, descripcion=?, direccion=?, thumbnail=? WHERE id_recinto = ? ";
          $q = $this->DB->prepare($sql);
          $q->execute(array($data['nombre_recinto'],$data['capacidad'],$data['descripcion'],$data['direccion'],$data['thumbnail'],$date));
          Database::disconnect();

      }

      function delete($date) {
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="DELETE FROM recinto where id_recinto=?";
          $q=$this->DB->prepare($sql);
          $q->execute(array($date));
          Database::disconnect();
      }

    }
?>
