<div class="container">
    <div class="jumbotron">
        <h2>formulario registro atractivo</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['id_atractivo']==""){ ?>
            <form action="index.php?c=atractivo_controller&m=get_datosE&id_atractivo=-1" method="post">
            <?php } ?>
            <?php if($data['id_atractivo']!=""){ ?>
            <form action="index.php?c=atractivo_controller&m=get_datosE&id_atractivo=<?php echo $data['id_atractivo'];?>" method="post">
            <?php } ?>


                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="nombre_atractivo">Nombre atractivo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre_atractivo" value="<?php echo $data['nombre_atractivo']; ?>" required>
                    </div>

                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Descripcion:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion']; ?>" required>
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

                    <div class="form-group">
                        <div class="col-md-12 col-md-off-set-3">
                        <?php if($data['id_atractivo']=="") { ?>
                            <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                        <?php } ?>
                        <?php if($data['id_atractivo']!="") { ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                        <?php } ?>
                        </div>
                    </div>
            </form>

        </div>
    </div>

</div>
