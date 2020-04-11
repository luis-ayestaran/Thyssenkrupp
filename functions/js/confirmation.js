document.onsubmit = function() {
  confirmarEnviarExamen();
}

function confirmarEnviarExamen() {
  var finalizar = confirm('Asegúrate de revisar tus respuestas antes de finalizar tu prueba. ¿Deseas continuar?');
  if(finalizar == true) {
    return true;
  } else {
    event.preventDefault();
    return false;
  }
}
