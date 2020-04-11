
<?php

    require_once('modelo/model.php');

    class Usuario_model extends Model {

        function get() {
            $sql= 'SELECT * FROM usuario ORDER BY id_usuario DESC';
            $fila=$this->DB->query($sql);
            $this->registros=$fila;
            return $this->registros;
        }

        function create($data) {
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO usuario(nombre, direccion, ubicRef, puesto, area, numTel) VALUES (:nombre, :direccion, :ubicRef, :puesto, :area, :numTel)";
            $query = $this->DB->prepare($sql);
            $query->bindParam(':nombre', $data['nombre']);
            $query->bindParam(':direccion', $data['direccion']);
            $query->bindParam(':ubicRef', $data['ubicRef']);
            $query->bindParam(':puesto', $data['puesto']);
            $query->bindParam(':area', $data['area']);
            $query->bindParam(':numTel', $data['numTel']);
            if ($query->execute()) {
              $mensaje = "Usuario creado correctamente";
            } else {
              $mensaje = "Fallo  al crear el usuario";
            }
            Database::disconnect();
        }

        function get_id($id) {
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM usuario WHERE id_usuario = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function find($nombre) {
          $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT * FROM usuario WHERE nombre = ?";
          $q = $this->DB->prepare($sql);
          $q->execute(array($nombre));
          $data = $q->fetch(PDO::FETCH_ASSOC);
          return $data;
        }

        function update($data,$date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE usuario SET nombre=?, apellido=?, usuario=?, contrasena=? WHERE id_usuario=?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['nombre'],$data['apellido'],$data['username'],$data['contrasena'], $date));
            Database::disconnect();

        }

        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="DELETE FROM usuario where id_usuario=?";
            $q=$this->DB->prepare($sql);
            $q->execute(array($date));
            Database::disconnect();
        }
    }
?>
