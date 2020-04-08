
  <!-- Comienza carrusel -->
 <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
       Slide 1
      <div class="carousel-item active bckgrnd-img" style="background-image: url('https://uberblogapi.10upcdn.com/wp-content/uploads/2019/08/9-actividades-en-Puebla-para-descubrir-todo-el-encanto-de-la-ciudad.png')">
        <div class="carousel-caption text-center">
          <h1 class="display-3 font-weight-normal" style="font-weight: bolder; filter: drop-shadow(0 0.5rem 0.6rem #000000ff);">
            <?php
              if($_SESSION['nombre'] != '' && $_SESSION['apellido'] != '') {
                echo 'Bienvenido, ' . $_SESSION['nombre'];
              }
            ?>
          </h1>
        </div>
      </div>
       Slide 2
      <div class="carousel-item bckgrnd-img" style="background-image: url('https://enterprise.mx/img/destinos/puebla.jpg');">
      </div>
       Slide 3
      <div class="carousel-item bckgrnd-img" style="background-image: url('https://www.visitmexico.com/viajemospormexico/assets/uploads/destinos/puebla_destinos-principales_puebla_03.jpg');">
      </div>
    </div>
     Fin Carousel inner
    <a class="carousel-control-prev control-shadow" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next control-shadow" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   Fin carrusel -->

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
   <h1 class="display-6 font-weight-normal text-primary">Operaciones básicas</h1>

   <div class="container">
   <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
    <?php
    $i = 0;
    $endrow = 6;
    foreach($operacionesmatematicas as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-2">
             <div class="card mb-2 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data['num1']?></p>
                 <p class="card-text"><hi><?php echo $data['operador']?> </h1><hi><?php echo $data['num2']?></h1></p>
                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img " style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
  <h1 class="display-6 font-weight-normal text-white">Lectura y escritura de números naturales</h1>

           <div class="container">
   <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
    <?php
    $i = 0;
    $endrow = 6;

    foreach($cadenanumero  as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data['num']?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>

          <div class="product-device box-shadow d-none d-md-block"></div>
         <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>


   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img " style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
     <h1 class="display-6 font-weight-normal text-white">Valor de posición de números naturales</h1>

   <div class="container">
   <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
    <?php
    $i = 0;
    $endrow = 6;

    foreach($valorposicional  as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data['preguntas']?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img " style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
  <h1 class="display-6 font-weight-normal text-white">Problemas matemáticos</h1>

   <div class="container">
    <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
     <?php
     $i = 0;
     $endrow = 6;

     foreach($problemas as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data['enunciado']?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>
     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img " style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
     <h1 class="display-6 font-weight-normal text-white">Números fraccionarios</h1>

   <div class="container">
    <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
     <?php
     $i = 0;
     $endrow = 6;

     foreach($fracciones as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <img class="card-img-top" src="<?php  $numfracc_imagen = array_shift($imagenes_fracc);
                                            echo $numfracc_imagen?>" alt="">
               <div class="card-body">
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img " style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
  <h1 class="display-6 font-weight-normal text-white">Porcentajes</h1>

   <div class="container">
    <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
     <?php
     $i = 0;
     $endrow = 6;

     foreach($operacionesmatematicas as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data['num1']//Fer aqui debemos usar la misma tabla?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img " style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
  <h1 class="display-6 font-weight-normal text-white">Gráficas</h1>

   <div class="container">
    <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
     <?php
     $i = 0;
     $endrow = 6;

     foreach($valorposicional as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 6 == 0):
                $endrow = $i + 6;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-4">
             <div class="card mb-4 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data[''] // fer debemos poner imagen y en la bd no hay?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
          endforeach;?>
          </form>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>

   <!-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img text-white" style="background-image: linear-gradient(#00000066, #000000aa), url('http://www.convencionespuebla.mx/images/centro%20de%20convenciones%20puebla.jpg?crc=55690617');">
       <div class="col-md-5 p-lg-5 mx-auto my-5">
         <h1 class="display-4 font-weight-normal">Recintos</h1>
         <p class="lead font-weight-normal">Visita los lugares donde suceden tus eventos favoritos</p>
         <a class="btn btn-outline-light" href="index.php?c=recinto_controller&m=mostrar_todos">Conoce más</a>
       </div>
       <div class="product-device box-shadow d-none d-md-block"></div>
       <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
     </div>

     <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bckgrnd-img text-white" style="background-image: linear-gradient(#00000066, #000000aa), url('https://www.visitmexico.com/viajemospormexico/assets/uploads/destinos/puebla_destinos-principales_puebla_02.jpg');">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 font-weight-normal">Atractivos turísticos</h1>
          <p class="lead font-weight-normal">Descubre los atractivos turísticos más importantes de la ciudad de Puebla.</p>
          <a class="btn btn-outline-light" href="index.php?c=atractivo_controller&m=mostrar_todos">Conoce más</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
      </div>
 END inicio SECTION -->
