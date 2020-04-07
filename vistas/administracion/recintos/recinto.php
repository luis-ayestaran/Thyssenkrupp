<div class="container">
    <div class="jumbotron">
        <h2>formulario registro recintos</h2>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['id_recinto']==""){ ?>
            <form action="index.php?c=recinto_controller&m=get_datosE&id_recinto=-1" method="post">
            <?php } ?>
            <?php if($data['id_recinto']!=""){ ?>
            <form action="index.php?c=recinto_controller&m=get_datosE&id_recinto=<?php echo $data['id_recinto'];?>" method="post">
            <?php } ?>


                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="nombre_recinto">Nombre recinto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre_recinto" value="<?php echo $data['nombre_recinto']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="capacidad">Capacidad:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="capacidad" value="<?php echo $data['capacidad']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Descripcion:</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="descripcion" name="descripcion" rows="6" required><?php echo $data['descripcion']; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="direccion">Direccion:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="direccion" value="<?php echo $data['direccion']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="direccion">Imagen principal:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="thumbnail" value="<?php echo $data['thumbnail']; ?>">
                    </div>

                </div>

                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['id_recinto']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                    <?php }  ?>
                    <?php if($data['id_recinto']!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
