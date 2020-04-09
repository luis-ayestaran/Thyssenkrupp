
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
  <form method="post" action="index.php?c=preguntas_controler&m=opmath" onsubmit="">
   <h1 class="display-6 font-weight-normal text-primary">Operaciones básicas</h1>
    <br>
    <br>
    <div class="container">

     <?php
     $i = 0;
     $endrow = 4;
     foreach($operacionesmatematicas as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <br>
          <br>
        <?php endif;
              if($i % 4 == 0):
                $endrow = $i + 4;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-3">
             <div class="card mb-3 box-shadow">
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

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light border: black 3px solid">
   <h1 class="display-6 font-weight-normal text-primary">Lectura y escritura de números naturales</h1>
    <br>
    <br>
           <div class="container">

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

          </div>
          <?php
                 $i = 0;
                 $endrow = 6;

                  foreach($numerocadena  as $data): ?>
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
                   </div>
                   </div>

          <div class="product-device box-shadow d-none d-md-block"></div>
         <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>


   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Valor de posición de números naturales</h1>
   <br>
     <div class="text-center">
      <img src="style/images/posicional.png" class="img-fluid" alt="Responsive image">
     </div>
     <br>
     <br>
   <div class="container">

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

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Problemas matemáticos</h1>
   <br>
   <br>
   <div class="container">

     <?php
     $i = 0;
     $endrow = 4;

     foreach($problemas as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 4 == 0):
                $endrow = $i + 4;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-12">
             <div class="card mb-12 box-shadow">
               <div class="card-body">
                 <p class="card-text "><?php echo $data['enunciado']?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 20%; display: inline !important;" required>
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

          </div>
          </div>
     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Números fraccionarios</h1>
   <br>
   <br>
   <div class="container">

     <?php
     $i = 0;
     $endrow = 6;

     foreach($imagenes_fracc as $data): ?>
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
                                            echo $numfracc_imagen["path"]?>" height="250"  alt="">
               <div class="card-body">
                 <section class="container text-center">
                     <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 20%; display: inline !important;" required>
                     <hr>
                    <input class="form-control" type="search" placeholder="" aria-label="Search" name="txt_buscar" style="width: 20%; display: inline !important;" required>
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

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Porcentajes</h1>
   <br>
   <br>
   <div class="container">

     <?php
     $i = 0;
     $endrow = 4;
     foreach($operacionesporcentaje as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 4 == 0):
                $endrow = $i + 4;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-3">
             <div class="card mb-3 box-shadow">
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

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Gráficas</h1>
    <br>
    <br>
    <div class="container">

     <?php
     $i = 0;
     $endrow = 6;

     foreach($imagenes_valpos as $data): ?>
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
                 <img class="card-img-top" src="<?php  $posimages = array_shift($imagenes_valpos);
                                              echo $posimages["path"]?>" height="250"  alt="">

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
          <div class="card-body">
          <button class="btn btn-lg btn-primary" type="submit" name="btn_buscar" style="display: inline;">
            <i class="fas fa-angle-double-right" href="index.php?c=controller&m=index"></i> Finalizar prueba
          </button></div>
  </form>
      <br>
    <br>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
