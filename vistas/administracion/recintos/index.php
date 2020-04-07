<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>registro de recintos</h2>
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
                    <th>id recinto</th>
                    <th>nombre recinto</th>
                    <th>capacidad</th>
                    <th>descripcion</th>
                    <th>direccion</th>
                    <th>imagen</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id_recinto']; ?></th>
                        <th><?php echo $data['nombre_recinto']; ?></th>
                        <th><?php echo $data['capacidad']; ?></th>
                        <th><?php echo $data['descripcion']; ?></th>
                        <th><?php echo $data['direccion']; ?></th>
                        <th><?php echo $data['thumbnail']; ?></th>
                        <th>
                            <a href="index.php?c=recinto_controller&m=recinto&id_recinto=<?php echo $data['id_recinto']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?c=recinto_controller&m=confirmarDelete&id_recinto=<?php echo $data['id_recinto']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
