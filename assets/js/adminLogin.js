//Validacion para la parte del administrador

function mostrarAccesoDenegado(){
    divMostrar = document.getElementById("accesoDenegado");
    divMostrar.style.display = "block";
}

function ocultarAccesoDenegado() {
    document.getElementById("accesoDenegado").style.display = "none";
}

// Detectar acción de navegación hacia atrás
window.onbeforeunload = function() {
    ocultarAccesoDenegado();
};
// Detectar acción de cuando se recargue la pagina

  