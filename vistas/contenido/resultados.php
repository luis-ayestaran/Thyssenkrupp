<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-1">
      <h1 class="display-4">Tu resultado</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 my-1">
      <ul class="list-group">
        <li class="list-group-item active"><h4><b>Información de puesto</b></h4></li>
        <li class="list-group-item">Aplicó: <mark><b><?php echo $_SESSION['nombre']; ?></b></mark></li>
        <li class="list-group-item">Para el área de: <mark><b><?php echo $_SESSION['area']; ?></b></mark></li>
        <li class="list-group-item">En el puesto: <mark><b><?php echo $_SESSION['puesto']; ?></b></mark></li>
      </ul>
    </div>
    <div class="col-md-4 my-1">
      <ul class="list-group">
        <li class="list-group-item active"><h4><b>Información de contacto</b></h4></li>
        <li class="list-group-item">Dirección: <mark><b><?php echo $_SESSION['direccion']; ?></b></mark></li>
        <li class="list-group-item">No. de teléfono: <mark><b><?php echo $_SESSION['numTel']; ?></b></mark></li>
        <li class="list-group-item">Ubicación de referencia: <mark><b><?php echo $_SESSION['ubicRef']; ?></b></mark></li>
      </ul>
    </div>
    <div class="col-md-4 text-center my-1">
      <?php if($evaluacion['resultado'] >= 6): ?>
        <h1 class="text-white bg-success py-5" style="border-radius: 0.5em;"><small>Calificación: </small><b><?php echo $evaluacion['resultado']; ?></b><h1>
      <?php else:?>
        <h1 class="text-white bg-danger py-5" style="border-radius: 0.5em;"><small>Calificación: </small><b><?php echo $evaluacion['resultado']; ?></b><h1>
      <?php endif; ?>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Operaciones básicas</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_opmatematicas as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó</th>
            <th scope="col" class="table-danger">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_opmatematicas as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo $error['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Lectura y escritura de números naturales</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_cadenanum as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó</th>
            <th scope="col" class="table-danger">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_cadenanum as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo $error['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_numerocad as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo strtoupper($acierto['resp_correcta']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó</th>
            <th scope="col" class="table-danger">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_numerocad as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo strtoupper($error['resp_correcta']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Valor de posición de números naturales</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_valorpos as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo strtoupper($acierto['resp_correcta']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó</th>
            <th scope="col" class="table-danger">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_valorpos as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo strtoupper($error['resp_correcta']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Problemas matemáticos</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_problemas as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó</th>
            <th scope="col" class="table-danger">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_problemas as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo $error['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Números fraccionarios</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó (NUMERADOR)</th>
            <th scope="col" class="table-success">Contestó (DENOMINADOR)</th>
            <th scope="col" class="table-success">Correcto (NUMERADOR)</th>
            <th scope="col" class="table-success">Correcto (DENOMINADOR)</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_numerofracc as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['numerador_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['denominador_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['numerador_correcto']; ?></td>
            <td class="table-success"><?php echo $acierto['denominador_correcto']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó (NUMERADOR)</th>
            <th scope="col" class="table-danger">Contestó (DENOMINADOR)</th>
            <th scope="col" class="table-danger">Correcto (NUMERADOR)</th>
            <th scope="col" class="table-danger">Correcto (DENOMINADOR)</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_numerofracc as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['numerador_usuario']; ?></td>
            <td class="table-danger"><?php echo $error['denominador_usuario']; ?></td>
            <td class="table-danger"><?php echo $error['numerador_correcto']; ?></td>
            <td class="table-danger"><?php echo $error['denominador_correcto']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Porcentajes</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_porcentajes as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-danger">Contestó</th>
            <th scope="col" class="table-danger">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_porcentajes as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo strtoupper($error['resp_correcta']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<hr class="my-5">

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center my-2">
      <h1>Gráficas</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-success">Aciertos</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-success">
            <th scope="col" class="table-success">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($aciertos_graficas as $acierto):?>
          <tr class="table-success">
            <td class="table-success"><?php echo $acierto['id_pregunta']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_usuario']; ?></td>
            <td class="table-success"><?php echo $acierto['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="text-center">
        <h2><span class="badge badge-danger">Errores</span></h2>
      </div>
      <table class="table">
        <thead>
          <tr class="table-danger">
            <th scope="col" class="table-danger">No. Pregunta</th>
            <th scope="col" class="table-success">Contestó</th>
            <th scope="col" class="table-success">Respuesta correcta</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($errores_graficas as $error):?>
          <tr class="table-danger">
            <td class="table-danger"><?php echo $error['id_pregunta']; ?></td>
            <td class="table-danger"><?php echo $error['resp_usuario']; ?></td>
            <td class="table-danger"><?php echo $error['resp_correcta']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="container">
  <form method="post" action="index.php?c=usuario_controller&m=cierra_sesion">
    <div class="container text-center">
      <button class="btn btn-lg btn-primary" type="submit" id="btnSalir" name="btnSalir" style="display: inline;">
        Terminar evaluación
      </button>
    </div>
  </form>
</div>
