const hamburguesa = document.querySelector('.hamburguesa');
const navegacion = document.querySelector('.navegacion');
const enlaces = document.querySelectorAll ('.navegacion a ');
const fecha = document.querySelector ('.fecha');



document.addEventListener('DOMContentLoaded',()=>{
    mostrarMenu();
    fechaActual();
});



function mostrarMenu (){
    hamburguesa.addEventListener('click',()=>{
        console.log ("clickeando....")
        navegacion.classList.toggle('ocultar');

    });

 }

 function cerrarMenu () {

        enlaces.forEach (enlace=> {
            enlace.addEventListener('click', (e)=>{
                if(e.target.tagName === 'A'){
                    navegacion.classList.add('ocultar');
                }
               
            });

        });
 }
 function fechaActual () {
    let fechaHoy = new Date () .getFullYear ();
    console.log (fechaHoy);
    fecha.textContent = fechaHoy;
 }