//Javascript para la confirmacion del envio del formulario

function cambiarBotones(){
    let botonEnvio = document.getElementById("finalizarButton");
    let botonPDF = document.getElementById("botonPDF");
    //Remover la clase de envio y deshabilitar el boton
    botonEnvio.disabled = true;
    botonEnvio.classList.remove("botonEnvio");
    botonEnvio.classList.add("botonInhabil");
    //Remover la clase de inhabil y habilitar
    botonPDF.disabled = false;
    botonPDF.classList.remove("botonInhabil");
    botonPDF.classList.add("botonEnvio");
}

function hacerPDF(){
    window.location.href = "GeneraPdf.php";
}