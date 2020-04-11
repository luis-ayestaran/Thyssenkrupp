
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" >
  <form method="post" action="index.php?c=respuestas_controller&m=mostrar_resultados" onsubmit="">
   <h1 class="display-6 font-weight-normal text-primary">Operaciones básicas</h1>
    <h4>Contesta las siguientes operacones sin utilizar calculadora y sólo número sin punto decimal.</h4>
    <br>
    <br>
    <div class="container">

     <?php
     $i = 0;
     $cont_preg = 1;
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
                 <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
                 <p class="card-text "><?php echo $data['num1']?></p>
                 <p class="card-text"><hi><?php echo $data['operador']?> </h1><hi><?php echo $data['num2']?></h1></p>
                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="number" min="0" placeholder="" aria-label="Search" id="txt_resp_opmat<?php echo $cont_preg; ?>" name="txt_resp_opmat<?php echo $cont_preg; ?>" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php  $i++;
                  $cont_preg++;
          endforeach;?>

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light border: black 3px solid">
   <h1 class="display-6 font-weight-normal text-primary">Lectura y escritura de números naturales</h1>
      <h4>Completa con números o letras según corresponda.</h4>
    <br>
    <br>
           <div class="container">

    <?php
    $i = 0;
    $cont_preg = 1;
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
                 <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
                 <p class="card-text "><?php echo $data['num']?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="number" min="0" placeholder="" aria-label="Search" name="txt_resp_cadnum<?php echo $cont_preg; ?>" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php  $i++;
                  $cont_preg++;
          endforeach;?>

          </div>
          <?php
                 $i = 0;
                 $cont_aux = 1;
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
                          <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
                          <p class="card-text "><?php echo $data['num']?></p>
                          <hr>
                          <section class="container text-center">
                              <input class="form-control" type="text" placeholder="" aria-label="Search" name="txt_resp_numcad<?php echo $cont_aux; ?>" style="width: 90%; display: inline !important;" required>
                           </section>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php $i++;
                          $cont_preg++;
                          $cont_aux++;
                  endforeach;?>
                   </div>
                   </div>

          <div class="product-device box-shadow d-none d-md-block"></div>
         <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>


   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Valor de posición de números naturales</h1>
     <h4>Observa esta imagen y contesta el número con letras.</h4>
    <br>
     <div class="text-center">
      <img src="style/images/posicional.png" class="img-fluid" alt="Responsive image">
     </div>
     <br>
     <br>
   <div class="container">

    <?php
    $i = 0;
    $cont_preg = 1;
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
                 <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
                 <p class="card-text "><?php echo $data['preguntas']?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="text" placeholder="" aria-label="Search" name="txt_resp_valpos<?php echo $cont_preg; ?>" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php  $i++;
                  $cont_preg++;
          endforeach;?>

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Problemas matemáticos</h1>
    <h4>Resuelve el siguiente problema.</h4>
   <br>
   <br>
   <div class="container">

     <?php
     $i = 0;
     $cont_preg = 1;
     $endrow = 1;

     foreach($problemas as $data): ?>
        <?php if($i == $endrow): ?>
          </div>
          <hr><br>
        <?php endif;
              if($i % 1 == 0):
                $endrow = $i + 1;
        ?>
         <div class="row">
         <?php endif; ?>
           <div class="col-md-12">
             <div class="card mb-12 box-shadow">
               <div class="card-body">
                 <p class="text-left "><a class="text-primary"><?php echo $cont_preg . ". "; ?></a><?php echo $data['enunciado']; ?></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="number" min="0" placeholder="" aria-label="Search" name="txt_resp_prob<?php echo $cont_preg; ?>" style="width: 20%; display: inline !important;" required>
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
   <h4>Escribe la fracción correspondiente.</h4>
   <br>
   <br>
   <div class="container">

     <?php
     $i = 0;
     $cont_preg = 1;
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
               <section class="container">
                 <br>
                 <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
               </section>
               <img class="card-img-top" src="<?php  $numfracc_imagen = array_shift($imagenes_fracc);
                                            echo $numfracc_imagen["path"]?>" height="275"  alt="">
               <div class="card-body">
                 <section class="container text-center">
                     <input class="form-control" type="number" min="0" placeholder="" aria-label="Search" name="txt_num_numfracc<?php echo $cont_preg; ?>" style="width: 25%; display: inline !important;" required>
                     <hr>
                    <input class="form-control" type="number" min="0" placeholder="" aria-label="Search" name="txt_den_numfracc<?php echo $cont_preg; ?>" style="width: 25%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php  $i++;
                  $cont_preg++;
          endforeach;?>

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Porcentajes</h1>
   <h4>Calcula los siguientes porcentajes, utilizando dos decimales en caso de ser necesario.</h4>
   <br>
   <br>
   <div class="container">

     <?php
     $i = 0;
     $cont_preg = 1;
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
                 <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
                 <p class="card-text "><?php echo $data['num1']?></p>
                 <p class="card-text"><hi><?php echo $data['operador']?> </h1><hi><?php echo $data['num2']?></h1></p>

                 <hr>
                 <section class="container text-center">
                     <input class="form-control" type="number" step="any" min="0" placeholder="" aria-label="Search" name="txt_resp_opporcent<?php echo $cont_preg; ?>" style="width: 90%; display: inline !important;" required>
                 </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
                  $cont_preg++;
          endforeach;?>

          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
   <h1 class="display-6 font-weight-normal text-primary">Gráficas</h1>
    <h4>Completa el nombre de las siguientes gráficas</h4>
    <br>
    <br>
    <div class="container">

     <?php
     $i = 0;
     $cont_preg = 1;
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
                 <p class="text-left text-primary"><?php echo $cont_preg . "."; ?></p>
                 <img class="card-img-top" src="<?php  $posimages = array_shift($imagenes_valpos);
                                              echo $posimages["path"]?>" height="250"  alt="">

                  <br>
                  <br>
                 <h5>Gráfica de:</h5>
                 <section class="container text-center">
                     <input class="form-control" type="text" placeholder="" aria-label="Search" name="txt_resp_graf<?php echo $cont_preg; ?>" style="width: 90%; display: inline !important;" required>
                  </section>
                 <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">

                   </div>
                 </div>
               </div>
             </div>
           </div>
           <?php $i++;
                  $cont_preg++;
          endforeach;?>
          <div class="card-body">
          <button class="btn btn-lg btn-primary" type="submit" id="btnCalificar" name="btnCalificar" style="display: inline;">
            Finalizar prueba
          </button>
      </div>
  </form>
      <br>
    <br>
          </div>
          </div>

     <div class="product-device box-shadow d-none d-md-block"></div>
     <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
   </div>
