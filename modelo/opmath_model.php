<?php

    require_once('modelo/model.php');

    class opmath_model extends Model {

      function get(){
          $sql= 'SELECT * FROM opmatematicas ORDER BY id_pregunta ASC';
          $fila=$this->DB->query($sql);
          $this->registros=$fila;
          return  $this->registros;
      }

      function create($data){

          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO opmatematicas(num1,num2,operador,res,id_pregunta,id_evaluacion,id_imagen)VALUES (?,?,?,?,?,?,?)";

          $query = $this->DB->prepare($sql);
          $query->execute(array($data['num1'],$data['num2'],$data['operador'],$data['res'],$data['id_pregunta'],$data['id_evaluacion'],$data['id_imagen']));
          Database::disconnect();

      }

      function get_id($id){
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM opmatematicas where id_pregunta = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($id));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
      }


    }
?>
