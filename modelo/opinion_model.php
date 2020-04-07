<?php

    require_once('modelo/model.php');

    class Opinion_model extends Model {

      function get(){
          $sql= 'SELECT id_opinion, fecha, comentario, recomendacion, id_usuario, id_evento, id_atractivo, dir_ip FROM opinion ORDER BY id_opinion DESC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO opinion(fecha,comentario,recomendacion,id_usuario,id_evento,id_atractivo,dir_ip,id_recinto) VALUES (?,?,?,?,?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['fecha'],$data['comentario'],$data['recomendacion'],$data['id_usuario'],$data['id_evento'],$data['id_atractivo'],$data['dir_ip'],$data['id_recinto']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM opinion WHERE id_opinion = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find_evento($id_evento){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM opinion WHERE id_evento = ?";
          $data = $this->DB->prepare($sql);
          $data->execute(array($id_evento));
          return $data;
      }

      function find_atractivo($id_atractivo){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM opinion WHERE id_atractivo = ?";
          $data = $this->DB->prepare($sql);
          $data->execute(array($id_atractivo));
          return $data;
      }

      function find_recinto($id_recinto){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM opinion WHERE id_recinto = ?";
          $data = $this->DB->prepare($sql);
          $data->execute(array($id_recinto));
          return $data;
      }

      function find_usuario_evento($id_usuario, $id_evento){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM opinion WHERE id_usuario = ? AND id_evento = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id_usuario, $id_evento));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function find_usuario_atractivo($id_usuario, $id_atractivo) {
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM opinion WHERE id_usuario = ? AND id_atractivo = ?";
        $q = $this->DB->prepare($sql);
        $q->execute(array($id_usuario, $id_atractivo));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        return $data;
      }

      function update($data,$date){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "UPDATE opinion SET fecha=?, comentario=?, recomendacion=?, id_usuario=?, id_evento=?, id_atractivo=?, dir_ip=? WHERE id_opinion=? ";
          $q = $this->DB->prepare($sql);
          $q->execute(array($data['fecha'],$data['comentario'],$data['recomendacion'],$data['id_usuario'],$data['id_evento'],$data['id_atractivo'],$data['dir_ip'], $date));
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
