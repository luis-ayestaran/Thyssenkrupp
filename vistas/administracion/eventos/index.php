<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Registro de eventos</h2>
    </div>

    <?php if(isset($_REQUEST['error']) && $_REQUEST['error'] != ''): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $_REQUEST['error']; ?>
    </div>
    <?php endif; ?>

    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id evento</th>
                    <th>nombre evento</th>
                    <th>fecha inicio</th>
                    <th>fecha fin</th>
                    <th>organizador</th>
                    <th>costo</th>
                    <th>Descripcion</th>
                    <th>id_recinto</th>
                    <th>tipo</th>
                    <th>imagen</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id_evento']; ?></th>
                        <th><?php echo $data['nombre_evento']; ?></th>
                        <th><?php echo $data['fecha_inicio']; ?></th>
                        <th><?php echo $data['fecha_fin']; ?></th>
                        <th><?php echo $data['organizador']; ?></th>
                        <th><?php echo $data['costo']; ?></th>
                        <th><?php echo $data['descripcion']; ?></th>
                        <th><?php echo $data['id_recinto']; ?></th>
                        <th><?php echo $data['tipo']; ?></th>
                        <th><?php echo $data['thumbnail']; ?></th>
                        <th>
                            <a href="index.php?c=evento_controller&m=evento&id_evento=<?php echo $data['id_evento']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?c=evento_controller&m=confirmarDelete&id_evento=<?php echo $data['id_evento']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
