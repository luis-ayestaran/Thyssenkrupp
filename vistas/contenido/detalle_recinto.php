<main role="main">
  <section class="jumbotron text-center bg-light text-white bckgrnd-img" style="background-image: linear-gradient(#00000077, #000000bb), url('<?php echo $recinto['thumbnail']; ?>');">
    <br><br><br><br>
    <div class="container">
      <h1 class="display-3"><?php echo $recinto['nombre_recinto']; ?></h1>
      <?php if($_SESSION['rol'] == 'administrador'): ?>
      <a class="btn btn-outline-light" href="index.php?c=imagen_controller&m=index">Agrega imágenes a la galería</a>
      <?php endif; ?>
    </div>
    <br><br>
  </section>
  <section class="container">
    <div class="row">
      <div class="col-12" style="margin: 0 auto; background-color: white; border-radius: 1rem; padding: 1.6rem 2.2rem; filter: drop-shadow(0 0 0.5rem #00000033);">
        <h5 class="lead"><b class="badge badge-primary">Lugar</b> <?php echo $recinto['direccion']; ?></h5>
        <br>
        <br>
        <h5 class="lead"><b class="badge badge-primary">Capacidad</b> <?php echo $recinto['capacidad']; ?></h5>
        <br>
        <br>
        <p class=""><?php echo $recinto['descripcion']; ?></p>
      </div>
    </div>
  </section>

  <br><br>

  <section class="container text-center">
    <h2 class="font-weight-bold text-primary">Galería</h2>
    <!-- Comienza carrusel -->
    <?php if($imagenes->rowCount() > 0): ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Comienza Carousel inner -->
      <div class="carousel-inner" role="listbox">
        <!-- SLIDES -->
        <?php $i = 0;
              foreach($imagenes as $imagen): ?>
        <div class="carousel-item <?php if($i == 0) { echo "active"; } ?> bckgrnd-img" style="background-image: url('<?php echo $imagen['url']; ?>'); height: 66vh; border-radius: 1.5rem;">
          <div class="carousel-caption text-center">
            <p class="text-white font-weight-normal" style="background-color: #000000cc; padding: 0.5rem; border-radius: 0.4rem;"><?php echo $imagen['descripcion'] ?></p>
            <h3></h3>
          </div>
        </div>
        <?php $i++;
              endforeach; ?>
      </div>
      <!-- Fin Carousel inner -->

      <ol class="carousel-indicators">
        <?php
        for($i = 0; $i < $imagenes->rowCount(); $i++):?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) { echo "active"; } ?>"></li>
        <?php endfor; ?>
      </ol>

      <?php if($imagenes->rowCount() > 1): ?>
      <a class="carousel-control-prev control-shadow" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next control-shadow" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <?php endif; ?>
    </div>
    <!-- Fin carrusel -->
    <?php else: ?>
    <div class="alert alert-info" role="alert">
      Vaya, tal parece que no hay imágenes en la galería aún.
    </div>
    <?php endif; ?>
  </section>

  <br><br>

  <section class="container text-center">
    <h2 class="font-weight-bold text-primary">Buscar en el mapa</h2>
    <div id="map" class="bg-primary" style="height: 66vh; width: 100%"></div>
    <script>
    var map;
    function initMap() {
      var myLatLng = {lat: 19.0438393, lng: -98.1982317};

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Puebla de los Ángeles'
      });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhTZ5VApCb-KUhfuETG4SV78Ts0yJdE6A&callback=initMap" async defer></script>
  </section>

  <br><br>

  <section class="container text-center">
    <h2 class="font-weight-bold text-primary">Comentarios</h2>
    <form method="post" action="index.php?c=recinto_controller&m=anadir_opinion&id_usuario=<?php if(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario'] != '') { echo $_SESSION['id_usuario']; } else { echo '-1'; } ?>&id_recinto=<?php echo $recinto['id_recinto'] ?>&recomendacion=5">
      <div class="form-group">
        <textarea class="form-control" id="comentario" name="comentario" placeholder="¿Qué opinas acerca de este evento?" rows="6" value="<?php echo $data['descripcion']; ?>" required></textarea>
        <input type="submit" class="btn btn-primary form-control" name="comentar" value="Comentar">
      </div>
    </form>
  </section>
  <br><br>
  <?php if(isset($opiniones) && !empty($opiniones)):
          $i = 0;
          foreach($opiniones as $opinion): ?>
  <br>
  <section class="container">
    <p class="lead text-primary"><?php echo $usuarios[$i]['nombre'], " ",$usuarios[$i]['apellido']; ?></p>
    <p class="text-justify"><?php echo $opinion['comentario']; ?></p>
    <small class="text-muted">Fecha: <?php echo $opinion['fecha']; ?></small>
  </section>
  <br><hr>
  <?php   $i++;
          endforeach;
        endif;?>
  <br><br>

</main>
