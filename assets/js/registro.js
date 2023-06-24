 /**
  * Validacion de formulario de Registro
  */

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
        alert("El CURP ingresado no es válido. Por favor, verificalo");
        return false;
    }
    else if(!regexCP.test(valorCP)){
        alert("El Código Postal ingresado no es válido. Por favor, verificalo");
        return false;
    }
    else if(valorFecha <= fechaMinima) {
        alert("La reservacion se debe de hacer con al menos 7 días de anticipacion. Por favor, verifique sus datos");
        return false;
    }
    else if(valorNumerico.length >10){
        alert('El campo debe tener como máximo 10 números.');
        return false;
    }
    else if(!(numPersonas >= 75 && numPersonas <= 200)){
        alert("El numero de personas minimas son 75 y el máximo son 200");
        return false;
    }
    else{
        return true;
    }
 }

 