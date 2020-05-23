/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("opennav").style.display = "none";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("opennav").style.display = "block";
  document.body.style.backgroundColor = "white";
}

/**funcion para agrandar las fotos **/
function ver (foto){
	// crea una figura nueva
		var figura = document.createElement('figure');
	//ponerle la clase grande
		figura.className = 'grande';
  //pone fondo oscuro al body
  /*  function(){
    var fondo = document.getElementById('main');
    fondo.className = 'fondofoto';}*/
	//hacer que al hacer click se elimine
		figura.onclick = function (){this.remove();};
  /*  figura.onclick = function(){fondo.remove('fondofoto');};*/
	//crear una imagen nueva
		var imagen = document.createElement('img');
	//pone el src de la foto que le llega por parametro
		imagen.src = foto.src;
	//coloca la imagen en la figura
		figura.appendChild(imagen);
	//coloca la figura en el body del documento
		document.body.appendChild(figura);
}

/********COOKIES ****/
/* ésto comprueba la localStorage si ya tiene la variable guardada */
function compruebaAceptaCookies() {
  if(localStorage.aceptaCookies == 'true'){
    cajacookies.style.display = 'none';
  }
}
/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
  localStorage.aceptaCookies = 'true';
  cajacookies.style.display = 'none';
}

/* ésto se ejecuta cuando la web está cargada */
$(document).ready(function () {
  compruebaAceptaCookies();
});
