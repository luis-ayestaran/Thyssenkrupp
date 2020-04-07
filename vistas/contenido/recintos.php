<?php
  //require('header.php');
?>
  <main role="main">
   <section class="jumbotron text-center bg-light text-dark" style="background-color: #ffd61f !important;">
     <br><br>
     <div class="container">
       <h1 class="display-3">Recintos</h1>
       <p class="lead">Explora los lugares donde se llevan a cabo tus eventos favoritos.</p>
       <?php if($_SESSION['rol'] == 'administrador') {?>
       <a class="btn btn-outline-dark" href="index.php?c=recinto_controller&m=index">Administra recintos</a>
      <?php } ?>
     </div>
   </section>

   <section class="container text-center">
     <form action="index.php?c=recinto_controller&m=mostrar_todos" class="inline-form" style="">
       <input class="form-control" type="search" placeholder="Busca un recinto" aria-label="Search" name="txt_buscar" style="width: 80%; display: inline !important;" required>
       <button class="btn btn-secondary" type="submit" name="btn_buscar" style="display: inline;"><i class="fas fa-search"></i> Buscar</button>
     </form>
   </section>

   <div class="album py-5">
    <div class="container">
   <?php
   $i = 0;
   $endrow = 3;
   foreach($query as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 3 == 0):
                $endrow = $i + 3;
        ?>
        <div class="row">
        <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <img class="card-img-top" src="<?php echo $data['thumbnail']?>" alt="<?php echo $data['nombre_recinto']?>">
               <div class="card-body">
                 <h5 class="text-primary"><b><?php echo $data['nombre_recinto']?></b></h5>
                 <p class="card-text text-muted"><?php if(strlen($data['descripcion']) > 150) {
                   echo substr($data['descripcion'], 0, 150) . "...";
                 } else {
                   echo $data['descripcion'];
                 } ?></p>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                     <a class="btn btn-sm btn-outline-secondary" href="index.php?c=recinto_controller&m=mostrar_detalle&id_recinto=<?php echo $data['id_recinto']?>">Ver más</a>
                   </div>
                   <small class="card-text text-primary"><?php if(strlen($data['direccion']) > 50) {
                     echo substr($data['direccion'], 0, 50) . "...";
                   } else {
                     echo $data['direccion'];
                   } ?></small>
                 </div>
               </div>
             </div>
           </div>
        <?php $i++;
          endforeach;?>
      </div>
    </div>

    <div id="map"></div>
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
      <!-- <script src="../../servicios/localizacion/mapas.js"></script> -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhTZ5VApCb-KUhfuETG4SV78Ts0yJdE6A&callback=initMap" async defer></script>
<?php
  //require('footer.php');
?>
