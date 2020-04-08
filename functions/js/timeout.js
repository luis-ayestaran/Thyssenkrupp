window.setTimeout(alertFunc, 2000, "First parameter", "Second parameter");

function alertFunc() {
  window.location.href = "index.php?c=preguntas_controller&m=index";
}
