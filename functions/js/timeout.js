window.onload = function() {
  document.documentElement.requestFullscreen();
}

if (document.fullscreenEnabled) {
  var btnCalificar = document.getElementById("btnCalificar");
  btnCalificar.addEventListener("click", function(event) {
    if (document.fullscreenElement) {
			document.exitFullscreen();
    }
  }, false);

	/*document.addEventListener("fullscreenchange", function(event) {
		console.log(event);
		if (!document.fullscreenElement) {
			btnCalificar.innerText = "Activa pantalla completa";
		} else {
			btnCalificar.innerText = "Desactiva pantalla completa";
		}
	});*/

	/*document.addEventListener("fullscreenerror", function (event) {
		console.log(event);
	});*/
}

//------------------ TIMER ---------------------//

window.setTimeout(alertFunc, 3600000, "First parameter", "Second parameter");

function alertFunc() {
  document.exitFullscreen();
  window.location.href = "index.php?c=preguntas_controller&m=index";
}
