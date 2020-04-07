<div class="container">
    <div class="jumbotron">
        <h2>formulario registro recintos</h2>
    </div>

    <?php if(isset($_REQUEST['error']) && $_REQUEST['error'] != ''): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_REQUEST['error']; ?>
    </div>
    <?php endif; ?>

    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['id_recinto']==""){ ?>
            <form action="index.php?c=evento_controller&m=get_datosE&id_evento=-1" method="post">
            <?php } ?>
            <?php if($data['id_evento']!=""){ ?>
            <form action="index.php?c=evento_controller&m=get_datosE&id_evento=<?php echo $data['id_evento'];?>" method="post">
            <?php } ?>


                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="nombre_evento">Nombre evento:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre_evento" value="<?php echo $data['nombre_evento']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="fecha_inicio">Fecha Inicio:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fecha_inicio" value="<?php echo $data['fecha_inicio']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="fecha_fin">Fecha fin:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fecha_fin" value="<?php echo $data['fecha_fin']; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="organizador">Organizador:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="organizador" value="<?php echo $data['organizador']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="costo">Costo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="costo" value="<?php echo $data['costo']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Descripcion:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Id recinto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_recinto" value="<?php echo $data['id_recinto']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Tipo:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tipo" value="<?php echo $data['tipo']; ?>" required>
                    </div>

                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="descripcion">Imagen principal:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="thumbnail" value="<?php echo $data['thumbnail']; ?>">
                    </div>

                </div>



                </div>
                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                    <?php if($data['id_evento']==""){ ?>
                        <input type="submit" class="btn btn-primary form-control" name="" value="registrar">
                    <?php }  ?>
                    <?php if($data['id_evento']!=""){ ?>
                    <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                    <?php }  ?>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
