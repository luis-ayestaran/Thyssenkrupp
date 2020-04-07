<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Registro de imágenes</h2>
        <p class="lead"></p>
    </div>

    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id imagen</th>
                    <th>url</th>
                    <th>descripcion</th>
                    <th>id_evento</th>
                    <th>id_atractivo</th>
                    <th>id_recinto</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id_imagen']; ?></th>
                        <th><?php echo $data['url']; ?></th>
                        <th><?php echo $data['descripcion']; ?></th>
                        <th><?php echo $data['id_evento']; ?></th>
                        <th><?php echo $data['id_atractivo']; ?></th>
                        <th><?php echo $data['id_recinto']; ?></th>
                        <th>
                            <a href="index.php?c=imagen_controller&m=imagen&id_imagen=<?php echo $data['id_imagen']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?c=imagen_controller&m=confirmarDelete&id_imagen=<?php echo $data['id_imagen']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
