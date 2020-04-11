<?php

    require_once('modelo/model.php');

    class respuestas_opmatematicas_model extends Model {

      function get(){
          $sql= 'SELECT * FROM resp_opmatematicas ORDER BY id_respuesta ASC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO resp_opmatematicas(resultado, id_pregunta, id_evaluacion) VALUES (?, ?, ?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['resultado'], $data['id_pregunta'], $data['id_evaluacion']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM resp_opmatematicas where id_respuesta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }

      function get_resp_basicop() {
        $sql= 'SELECT r.resultado, p.res FROM resp_opmatematicas r, opmatematicas p WHERE r.id_pregunta = p.id_pregunta ORDER BY r.id_respuesta ASC';
        $fila=$this->DB->query($sql);
        $this->registros=$fila;
        return  $this->registros;
      }

    }
?>
