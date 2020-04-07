<?php
  include_once('header.php');
?>

<section class="container">
  <div class="row">
    <div class="col-4" style="margin: 0 auto;">
      <h2 class=""><b>Inicia sesión<b></h2>
    </div>
  </div>
  <p></p>
</section>
<section class="container">
  <div class="row">
    <div class="col-4 formulario">
      <form method="post" action="index.php?c=usuario_controller&m=autentica">
        <div class="form-group">
          <!-- <label for="email">Nombre de usuario</label> -->
          <input type="text" class="form-control" id="txt_username" name="txt_username" placeholder="Nombre de usuario" required>
        </div>
        <div class="form-group">
          <!-- <label for="email">Contraseña</label> -->
          <input type="password" class="form-control" id="txt_contrasena" name="txt_contrasena" placeholder="Contraseña" required>
        </div>
        <div class="form-group" style="padding: 0; margin: 0; text-align: center;">
          <button type="submit" name="login" class="btn btn-primary" style="width: 100%;">Inicia sesión</button>
          <div class="separator"><span class="font-weight-bold">O</span></div>
          <small class="text-center">¿Aún no tienes cuenta?</small>
          <a name="signup" class="btn btn-outline-primary" style="width: 100%;" href="index.php?c=controller&m=signup">Regístrate</a>
        </div>
        <br>
        <div class="text-center font-weight-light">
          <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
      </form>
      <?php if($error_login != "") { ?>
      <br>
      <div class="alert-warning"><?php echo $error_login; ?></div>
      <?php } ?>
    </div>
  </div>
</section>

<?php
  include_once('footer.php');
?>
