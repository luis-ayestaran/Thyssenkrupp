document.onsubmit = function() {
  confirmarEnviarExamen();
}

function confirmarEnviarExamen() {
  var finalizar = confirm('Asegúrate de revisar tus respuestas antes de finalizar tu prueba. ¿Deseas continuar?');
  if(finalizar == true) {
    alert('Has decidido enviar');
    return true;
  } else {
    alert('Has decidido no enviar');
    return false;
  }
}
