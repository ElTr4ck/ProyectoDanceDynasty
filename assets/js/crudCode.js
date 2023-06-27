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

function buscarPorFolio(){
    let divCurp = document.getElementById("busquedaCURPDiv");
    let divFolio = document.getElementById("busquedaPorFolio");

    //Mostrar u ocultar los divs correspondientes
    divCurp.style.display = "none";
    divFolio.style.display = "block";
}

function buscarPorCURP(){
  let divCurp = document.getElementById("busquedaCURPDiv");
  let divFolio = document.getElementById("busquedaPorFolio");

  //Mostrar u ocultar los divs correspondientes
  divCurp.style.display = "block";
  divFolio.style.display = "none";
}

document.getElementById('botonDeBusqueda').addEventListener('click', function() {
  var metodoBusqueda = document.querySelector('input[name="metodoBusqueda"]:checked').value;
  
  // Obtener los datos del formulario según el método de búsqueda seleccionado
  var formData = new FormData();
  
  if (metodoBusqueda === 'folio') {
    var folioABuscar = document.getElementById('folio').value;
    formData.append('metodoBusqueda', 'folio');
    formData.append('folioABuscar', folioABuscar);
  } else {
    var curpABuscar = document.getElementById('curp').value;
    var fechaABuscar = document.getElementById('fecha').value;
    formData.append('metodoBusqueda', 'curp');
    formData.append('curpABuscar', curpABuscar);
    formData.append('fechaABuscar', fechaABuscar);
  }
  
  // Realizar solicitud AJAX
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'leerRegistro.php', true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Obtener los datos de respuesta en formato JSON
      var datos = JSON.parse(xhr.responseText);
      
      // Construir la tabla HTML
      var tablaHtml = '<table>';
      tablaHtml += '<tr><th>Nombre</th><th>CURP</th><th>E-Mail</th><th>Salón</th><th>Fecha del evento</th><th>Horario</th></tr>';
      
      datos.forEach(function(fila) {
        tablaHtml += '<tr>';
        tablaHtml += '<td>' + fila.Nombre(s) + '</td>';
        tablaHtml += '<td>' + fila.Curp + '</td>';
        tablaHtml += '<td>' + fila.Email + '</td>';
        tablaHtml += '<td>' + fila.Salon + '</td>';
        tablaHtml += '<td>' + fila.FechaE + '</td>';
        tablaHtml += '<td>' + fila.Curp + '</td>';
        tablaHtml += '</tr>';
      });
      
      tablaHtml += '</table>';
      
      // Mostrar la tabla en el contenedor correspondiente
      document.getElementById('tablaRegistros').innerHTML = tablaHtml;
    }
  };
  xhr.send(formData);
});
