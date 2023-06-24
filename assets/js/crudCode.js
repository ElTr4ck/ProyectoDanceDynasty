/*--------------------------------------------------------------
# Funcionalidades extras solo usadas en el CRUD
--------------------------------------------------------------*/

const botonMostrarCrear = document.getElementById("mostrarCrear");
const seccionCrear = document.getElementById("formulario");
const botonMostrarLeer = document.getElementById("mostrarLeer");
const seccionLectura = document.getElementById("lecturaRegistro");
const botonMostrarModificar = document.getElementById("mostrarActualizar");
const seccionModificar = document.getElementById("modificaRegistro");
const botonMostrarEliminar = document.getElementById("mostrarEliminar");
const seccionEliminar = document.getElementById("eliminaRegistro");



// Mostrar la parte de lectura y ocultar lo demás

// Agregar evento click al enlace de lectura
botonMostrarCrear.addEventListener('click', function(event) {
  // Prevenir el comportamiento predeterminado del enlace
  event.preventDefault();

  // Mostrar u ocultar el div según su estado actual
  if (seccionCrear.style.display === 'none') {
    seccionLectura.style.display = 'none';
    botonMostrarLeer.classList.remove("active");

    seccionCrear.style.display = "block";
    botonMostrarCrear.classList.add("active");

    seccionModificar.style.display = "none";
    botonMostrarModificar.classList.remove("active");

    seccionEliminar.style.display = "none";
    botonMostrarEliminar.classList.remove("active");
  }
});

// Agregar evento click al enlace de lectura
botonMostrarLeer.addEventListener('click', function(event) {
  // Prevenir el comportamiento predeterminado del enlace
  event.preventDefault();

  // Mostrar u ocultar el div según su estado actual
  if (seccionLectura.style.display === 'none') {
    seccionLectura.style.display = 'block';
    botonMostrarLeer.classList.add("active");

    seccionCrear.style.display = "none";
    botonMostrarCrear.classList.remove("active");

    seccionModificar.style.display = "none";
    botonMostrarModificar.classList.remove("active");

    seccionEliminar.style.display = "none";
    botonMostrarEliminar.classList.remove("active");
  }
});

// Agregar evento click al enlace de modificar
botonMostrarModificar.addEventListener('click', function(event) {
    // Prevenir el comportamiento predeterminado del enlace
    event.preventDefault();
  
    // Mostrar u ocultar el div según su estado actual
    if (seccionModificar.style.display === 'none') {
      seccionLectura.style.display = 'none';
      botonMostrarLeer.classList.remove("active");

      seccionCrear.style.display = "none";
      botonMostrarCrear.classList.remove("active");

      seccionModificar.style.display = "block";
      botonMostrarModificar.classList.add("active");

      seccionEliminar.style.display = "none";
      botonMostrarEliminar.classList.remove("active");
    }
});

// Agregar evento click al enlace de eliminar
botonMostrarEliminar.addEventListener('click', function(event) {
    // Prevenir el comportamiento predeterminado del enlace
    event.preventDefault();
  
    // Mostrar u ocultar el div según su estado actual
    if (seccionEliminar.style.display === 'none') {
      seccionLectura.style.display = 'none';
      botonMostrarLeer.classList.remove("active");

      seccionCrear.style.display = "none";
      botonMostrarCrear.classList.remove("active");

      seccionModificar.style.display = "none";
      botonMostrarModificar.classList.remove("active");

      seccionEliminar.style.display = "block";
      botonMostrarEliminar.classList.add("active");
    }
});