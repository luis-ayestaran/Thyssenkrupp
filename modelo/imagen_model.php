<?php

    require_once('modelo/model.php');

    class Imagen_model extends Model {

      function get(){
          $sql= 'SELECT * FROM imagen ORDER BY id_imagen DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          echo $data['id_usuario'];

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO imagen(path) VALUES (?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['path']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM imagen WHERE id_imagen = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find($nombre_atractivo){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM imagen WHERE url = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($nombre_atractivo));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find_evento($id_evento){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM imagen WHERE id_evento = ?";
          $data = $this->DB->prepare($sql);
          $data->execute(array($id_evento));
          return $data;
      }

      function find_atractivo($id_atractivo){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM imagen WHERE id_atractivo = ?";
          $data = $this->DB->prepare($sql);
          $data->execute(array($id_atractivo));
          return $data;
      }

      function find_recinto($id_recinto){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM imagen WHERE id_recinto = ?";
          $data = $this->DB->prepare($sql);
          $data->execute(array($id_recinto));
          return $data;
      }

      function update($data,$date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE imagen SET url=?, descripcion=?, id_evento=?, id_atractivo=?, id_usuario=?, id_recinto=? WHERE id_imagen=? ";
          $q = $this->DB->prepare($sql);
          $q->execute(array($data['url'],$data['descripcion'],$data['id_evento'],$data['id_atractivo'],$data['id_usuario'],$data['id_recinto'], $date));
          Database::disconnect();
      }

      function delete($date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="DELETE FROM imagen where id_imagen=?";
          $q=$this->DB->prepare($sql);
          $q->execute(array($date));
          Database::disconnect();
      }

    }
?>
