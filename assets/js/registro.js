 /**
  * Validacion de formulario de Registro y alertas
  */

 function validarMayusculas(input) {
    var valor = input.value;
    var valorMayusculas = valor.toUpperCase();
  
    if (valor !== valorMayusculas) {
      input.value = valorMayusculas;
    }
  }

 function mostrarCamposOtroEvento(){
    let tipoSelect = document.getElementById("EventoAElegir");
    let divSelect = document.getElementById("otroEvento");
    let inputSelect = document.getElementById("otro");

    if(tipoSelect.value === "Otro"){
        divSelect.style.display = "block";
        inputSelect.required = true;
    }
    else{
        divSelect.style.display = "none";
        inputSelect.required = false;
    }
 }

 function mostrarCamposOtroMenu(){
    let tipoSelect = document.getElementById("MenuAElegir");
    let divSelect = document.getElementById("otroMenu");
    let entrada = document.getElementById("entradaMenu");
    let platofuerte = document.getElementById("fuerteMenu");
    let postre = document.getElementById("postreMenu");

    if(tipoSelect.value === "Personalizable"){
        divSelect.style.display = "block";
        entrada.required = true;
        platofuerte.required = true;
        postre.required = true;
    }
    else{
        divSelect.style.display = "none";
        entrada.required = false;
        platofuerte.required = false;
        postre.required = false;
    }
 }


let campoSalon = document.getElementById("salon");

function llenadoDeHorarios(){
    let salonSeleccionado = campoSalon.value;
    let campoHorario = document.getElementById("Horario");
    
    //Limpiar las opciones actuales del campo del horario
    campoHorario.innerHTML = '';
    // Definir las opciones personalizadas para el campo 2
    let opcionesHorario = {
        SalonA: ["Viernes [12:00-17:00]", "Viernes [19:00-00:00]", "Sábado [14:00-19:00]", "Sábado [21:00-02:00]"],
        SalonB: ["Viernes [12:00-17:00]", "Viernes [19:00-00:00]", "Sábado [14:00-19:00]", "Sábado [21:00-02:00]"],
        Jardin: ["Domingo [09:00-14:00]"]
    };

    if(salonSeleccionado in opcionesHorario){
        let opcionesPersonalizadas = opcionesHorario[salonSeleccionado];
        //Crear y agregar las opciones al campo de Horario de acuerdo al salón
        opcionesPersonalizadas.forEach(function(opcion){
            let opcioncita = document.createElement("option");
            opcioncita.textContent = opcion;
            campoHorario.appendChild(opcioncita);
        });
    }
}
campoSalon.addEventListener("change", llenadoDeHorarios);
llenadoDeHorarios();

 function validaDatos(){
    let regexCURP = /^[A-Z]{4}\d{6}[HM]{1}[A-Z]{2}[B-DF-HJ-NP-TV-Z]{3}[A-Z0-9]{1}\d{1}$/;
    let regexCP = /^\d{5}$/;
    let campoCURP = document.getElementById("CURP");
    let valorCURP = campoCURP.value;
    let campoCP = document.getElementById("CP");
    let valorCP = campoCP.value;
    let campoFecha = document.getElementById("FechaEvento");
    let valorFecha = new Date(campoFecha.value);
    let fechaActual = new Date();
    let fechaMinima = new Date();
    fechaMinima.setDate(fechaActual.getDate() + 7);
    let campoNumero = document.getElementById('numeroCel');
    let valorNumerico = campoNumero.value;
    let camponumPersonas = document.getElementById("numPersonas");
    let numPersonas = camponumPersonas.value;

    if (!regexCURP.test(valorCURP)){
        //Valor para cuando no se cumpla la validacion
        Swal.fire({
            title: "ERROR",
            text: "La CURP ingresada es invalida, favor de rectificarla",
            icon: "error"
        });
        campoCURP.focus();
        return false;
    }
    else if(!regexCP.test(valorCP)){
        Swal.fire({
            title: "ERROR",
            text: "El Código Postal ingresado es invalido, favor de rectificarlo",
            icon: "error"
        });
        campoCP.focus();
        return false;
    }
    else if(valorFecha <= fechaMinima) {
        Swal.fire({
            title: "ERROR",
            text: "La Fecha se debe de reservar con al menos 7 dias de anticiáción, favor de rectificar sus datos",
            icon: "error"
        });
        campoFecha.focus();
        return false;
    }
    else if(valorNumerico.length != 10){
        Swal.fire({
            title: "ERROR",
            text: "El número ingresado debe tener 10 dígitos",
            icon: "error"
        });
        campoNumero.focus();
        return false;
    }
    else if(!(numPersonas >= 75 && numPersonas <= 200)){
        Swal.fire({
            title: "ERROR",
            text: "El número de personas mínimo de es de 75 y el máximo de 200, por favor verifique sus datos",
            icon: "error"
        });
        camponumPersonas.focus();
        return false;
    }
    else{
        return true;
    }
 }

  /**
  * parte de la ventana flotante de confirmacion para el formulario, se usa la libreria SweetAlert2
 */

document.getElementById("submitButton").addEventListener("click", function(event){
    event.preventDefault(); //Evita el envio automatico del formulario

    //Obtener los datos del formulario
    let formData = {
        nombreUsuario: document.getElementById("NombreUser").value,
        apPaterno: document.getElementById("ApellidoPaterno").value,
        apMaterno: document.getElementById("ApellidoMaterno").value,
        curp: document.getElementById("CURP").value,
        email: document.getElementById("email").value,
        numeroCel: document.getElementById("numeroCel").value,
        calle: document.getElementById("calle").value,
        cp: document.getElementById("CP").value,
        numeroExt: document.getElementById("NumeroExt").value,
        numeroInt: document.getElementById("NumeroInt").value,
        entidad: document.getElementById("Entidad").value,
        municipio: document.getElementById("municipio").value,
        colonia: document.getElementById("colonia").value,
        salon: document.getElementById("salon").value,
        fechaEvento: document.getElementById("FechaEvento").value,
        personas: document.getElementById("numPersonas").value,
        eventoElegido: document.getElementById("EventoAElegir").value,
        otroEvento: document.getElementById("otro").value,
        menu: document.getElementById("MenuAElegir").value,
        entradaMenu: document.getElementById("entradaMenu").value,
        platofuerte: document.getElementById("fuerteMenu").value,
        postre: document.getElementById("postreMenu").value,
    }

    //Verificar que todos los campos esten llenos
    const camposRequeridos = document.querySelectorAll("[required]");
    let todosLlenos = Array.from(camposRequeridos).every((campo) => campo.checkValidity());
    if(!todosLlenos){
        Swal.fire({
            title: "Error",
            text: "Por favor, completa todos los campos antes de continuar.",
            icon: "error"
        });
        return;
    }

    if(!validaDatos()){
        //Si los datos no son validos, no seguir con el codigo
        return;
    }

    //Mostrar la ventana de confirmacion
    Swal.fire({
        title: "Hola " + formData.nombreUsuario + " verifica que tus datos de registro sean correctos:",
        html: "<p>Los datos ingresados son: <br><br>" +
        "<strong>Nombre completo: </strong>" + formData.nombreUsuario + " " + formData.apPaterno + " " + formData.apMaterno +
        "<br> <strong> CURP: </strong>" + formData.curp + "<br>" +
        "<strong> E-mail de contacto: </strong>" + formData.email + "<br>" +
        "<strong> Numero celular: </strong>" + formData.numeroCel + "<br></p>" +
        "<h3>Domicilio: </h3> <p><strong> Calle: </strong>" + formData.calle + "<br>"+
        "<strong> Numero Exterior: </strong>" + formData.numeroExt + "<br>" +
        "<strong> Numero Interior: </strong>" + formData.numeroInt + "<br>" +
        "<strong> Entidad: </strong>" + formData.entidad + "<br>" +
        "<strong> Municipio: </strong>" + formData.municipio + "<br>" +
        "<strong> Colonia: </strong>" + formData.colonia + "</p>" +
        "<h3>Datos de reservación: </h3> <p>" +
        "<strong> Salon elegido: </strong>" + formData.salon + "<br>" +
        "<strong> Fecha del evento: </strong>" + formData.fechaEvento + "<br>" +
        "<strong> Evento elegido: </strong>" + formData.eventoElegido + "<br>" +
        ((formData.otroEvento) ? "<strong> Evento otro elegido: </strong>" + formData.otroEvento + "<br>" : "") +
        "<strong> Menu elegido: </strong>" + formData.menu + "<br>" +
        (formData.entradaMenu ? "<strong> Entrada del menú personalizado: </strong>" + formData.entradaMenu + "<br>" : "") +
        (formData.platofuerte ? "<strong> Plato fuerte del menú personalizado: </strong>" + formData.platofuerte + "<br>" : "") +
        (formData.postre ? "<strong> Postre del menú personalizado: </strong>" + formData.postre + "<br>" : ""),
        icon: "question",
        showCancelButton: true,
        confirmButtontext: "Guardar",
        cancelButtonText: "Modificar",
        reverseButtons: true
    }).then(function(result){
        if(result.value){
            //Si se hace click en guardar, se envia el formulario
            document.getElementById("formContratacion").submit();
        }
    });
});





