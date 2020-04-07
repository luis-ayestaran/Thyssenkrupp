<div class="container">
    <div class="jumbotron">
        <h2>formulario registro imagen</h2>
    </div>

    <?php if(isset($_REQUEST['error']) && $_REQUEST['error'] != ''): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_REQUEST['error']; ?>
    </div>
    <?php endif; ?>

    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
          <?php if($data['id_imagen']=="") : ?>
          <form action="index.php?c=imagen_controller&m=get_datosE&id_imagen=-1" method="post">
          <?php endif; ?>
          <?php if($data['id_imagen']!="") : ?>
          <form action="index.php?c=imagen_controller&m=get_datosE&id_usuario=<?php echo $_SESSION['id_usuario'], "&id_imagen=", $data['id_imagen']; ?>" method="post">
          <?php endif; ?>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="url">URL:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="url" value="<?php echo $data['url']; ?>" required>
                    </div>

                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Descripción:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion']; ?>">
                    </div>
                  </div>

                    <div class="form-group">
                      <label class=" col-sm-2 control-label" for="id_evento">ID de evento:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="id_evento" value="<?php if(isset($data['id_evento'])) { echo $data['id_evento']; }//echo $data['id_evento']; ?>" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class=" col-sm-2 control-label" for="id_atractivo">ID de atractivo:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="id_atractivo" value="<?php if(isset($data['id_atractivo'])) { echo $data['id_atractivo']; } ?>" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class=" col-sm-2 control-label" for="id_recinto">ID de recinto:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="id_recinto" value="<?php if(isset($data['id_recinto'])) { echo $data['id_recinto']; } ?>" >
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 col-md-off-set-3">
                        <?php //if($data['id_imagen']=="") { ?>
                            <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                        <?php //} ?>
                        <?php //if($data['id_imagen']!="") { ?>
                        <!-- <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar"> -->
                        <?php //} ?>
                        </div>
                    </div>
            </form>

        </div>
    </div>

</div>
