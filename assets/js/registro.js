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

/*Select Anidados*/

let dias = ["Viernes", "Sabado", "Domingo"];
let hora = ["12:00-17:00", "19:00-00:00", "14:00-19:00", "21:00-02:00", "09:00-14:00"];

let combo1 = document.getElementById('Dia');
let combo2 = document.getElementById('Horario');

function recorrer(combobox, valores){
    combo2.innerHTML = '';

    for(let index of valores){
        combobox.innerHTML+=`
        
        <option>${index}</option> 
        
        `
    }

}

function llenarH(){

    recorrer(combo1, dias);

}

llenarH();

combo1.addEventListener('change', (e)=>{

    let dato = e.target.value

    switch (dato){

        case 'Viernes':
            recorrer(combo2, hora.slice(0,2))
            break;
        case 'Sabado':
            recorrer(combo2,hora.slice(2,4))
            break;
        case 'Domingo':
            recorrer(combo2,hora.slice(4))
        default:
            break;

    }

})

/*
function SelectAnidados(){

    let Dia = document.getElementById("Dia");
    let divSelectV = document.getElementById("Viernes");
    let divSelectS = document.getElementById("Sabado");
    let divSelectD = document.getElementById("Domingo");
    let Hviernes = document.getElementById("HorarioV");
    let Hsabado = document.getElementById("HorarioS");
    let Hdomingo = document.getElementById("HorarioD");

    if(Dia.value === "Viernes"){
        divSelectV.style.display = "block";
        Hviernes.required = true;
        Hsabado.required = false;
        Hdomingo.required = false;
        divSelectS.style.display = "none";
        divSelectD.style.display = "none";
    }else if(Dia.value === "Sabado"){
        divSelectS.style.display = "block";
        Hsabado.required = true;
        Hviernes.required = false;
        Hdomingo.required = false;
        divSelectV.style.display = "none";
        divSelectD.style.display = "none";
    }else if(Dia.value === "Domingo"){
        divSelectD.style.display = "block";
        Hdomingo.required = true;
        Hviernes.required = false;
        Hsabado.required = false;
        divSelectV.style.display = "none";
        divSelectS.style.display = "none";
    }else{
        divSelectV.style.display = "none";
        divSelectS.style.display = "none";
        divSelectD.style.display = "none";
        Hviernes.required = false;
        Hsabado.required = false;
        Hdomingo.required = false;
    }

}
*/

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
    else{
        return true;
    }
 }
