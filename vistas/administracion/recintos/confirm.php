<section class="container">
    <div class="row">
    <form method="post" action="index.php?c=recinto_controller&m=confirmarDelete&id_recinto=<?php echo "0";?>">
        <div class="col-md-6 col-md-offset-3">
            <label>¿Deseas eliminar este registro?</label>
            <input type="hidden" name="txt_id_recinto" value="<?php echo $data['id_recinto']; ?>">
            <input type="submit" name="" value="eliminar" class="form-control btn btn-danger">
        </div>
    </form>
    </div>
</section>
