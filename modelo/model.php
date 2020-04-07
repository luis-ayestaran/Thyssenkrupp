<?php

    abstract class Model{

      protected $DB;
      protected $registros;

      function __construct(){
          $this->DB=Database::connect();
      }

      abstract protected function get();

      abstract protected function create($data);

      abstract protected function get_id($id);
    }
?>
