const boton = document.getElementById("boton");
const documento = document.getElementById("documento");
const contenedor = document.getElementById("contenedor");
const contrasena = document.getElementById("password");

function inicio() {
    boton.disabled = true;
    boton.classList.remove("boton-ingresoUno");
    boton.classList.remove("boton-ingreso");
    boton.classList.add("error")
}
inicio();

// ///////////////////////// VALIDAR CAMPOS  ////////////////////////////
documento.addEventListener("blur", validarCampo);
contrasena.addEventListener("blur", validarCampo);
function validarCampo() {
  
   if ( documento.value.length > 0  && contrasena.value.length > 0) {
       boton.disabled = false;
       boton.classList.add("boton-ingresoUno");
       boton.classList.remove("error");
       boton.classList.add("boton-ingreso");
       // ////////////////// CREACION DE ELEMNENTO IMG Y AGREGAR AL HTML ////////////////
       const imagen = document.createElement("img");
       imagen.src = "img/encuesta.png";
       imagen.style.width = "60px";
       contenedor.appendChild(imagen);
   }
}

