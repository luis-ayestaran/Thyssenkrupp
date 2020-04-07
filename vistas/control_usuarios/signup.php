<section class="container">
  <div class="row">
    <div class="col-6" style="margin: 0 auto;">
      <h2 class=""><b>Regístrate<b></h2>
    </div>
  </div>
  <p></p>
</section>
<section class="container">
  <div class="row">
    <div class="col-6 formulario">
      <form method="post" action="index.php?c=usuario_controller&m=crea_usuario" onsubmit="return validaSignup();">
        <div class="form-group">
          <!-- <label for="name">Nombre</label> -->
          <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre completo" required>
        </div>
        <div class="form-group">
          <!-- <label for="name">Apellido</label> -->
          <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" placeholder="Dirección" required>
        </div>
        <div class="form-group">
          <select class="browser-default custom-select" id="slct_lugares" name="slct_lugares" required>
            <option value="">Ubicación de referencia</option>
            <option value="Puebla">Puebla</option>
            <option value="Cholula">Cholula</option>
            <option value="Atlixco">Atlixco</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="txt_puesto" name="txt_puesto"  placeholder="Puesto al que aplica" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="txt_area" name="txt_area"  placeholder="Pertenece al área de" required>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" id="txt_telefono" name="txt_telefono" pattern="^[0-9]{10}$" placeholder="Número de teléfono [10 dígitos]" required>
        </div>
        <div class="form-group">
          <button type="submit" name="signup" class="btn btn-primary" style="width: 100%;">Regístrate</button>
        </div>
      </form>
    </div>
  </div>
</section>
