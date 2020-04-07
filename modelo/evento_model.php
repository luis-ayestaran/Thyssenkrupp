<?php

    require_once('modelo/model.php');

    class Evento_model extends Model {

      function get(){
          $sql= 'SELECT * FROM evento ORDER BY id_evento DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO evento(nombre_evento,fecha_inicio,fecha_fin,organizador,costo,descripcion,id_recinto,tipo,thumbnail)VALUES (?,?,?,?,?,?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['nombre_evento'],$data['fecha_inicio'],$data['fecha_fin'],$data['organizador'],$data['costo'],$data['descripcion'],$data['id_recinto'],$data['tipo'],$data['thumbnail']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM evento where id_evento = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find($nombre_atractivo){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM evento WHERE nombre_evento = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($nombre_atractivo));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function update($data,$date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE evento  set  nombre_evento=?, fecha_inicio=?, fecha_fin=?, organizador=?, costo=?, descripcion=?, id_recinto=?, tipo=?, thumbnail=? WHERE id_evento=? ";
          $q = $this->DB->prepare($sql);
          $q->execute(array($data['nombre_evento'],$data['fecha_inicio'],$data['fecha_fin'],$data['organizador'],$data['costo'],$data['descripcion'],$data['id_recinto'], $data['tipo'], $data['thumbnail'], $date));
          Database::disconnect();
      }

      function delete($date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="DELETE FROM evento WHERE id_evento=?";
          $q=$this->DB->prepare($sql);
          $q->execute(array($date));
          Database::disconnect();
      }

    }
?>
