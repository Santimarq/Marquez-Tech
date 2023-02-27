document.addEventListener('DOMContentLoaded' , function (){

    const email = {
        email: '',
        nombre: '' ,
        telefono: '',
        mensaje: ''


    }
    
    // elementos HTML
    const inputEmail = document.querySelector ('#email');
    const inputNombre = document.querySelector ('#nombre');
    const inputTelefono = document.querySelector ('#telefono');
    const inputMensaje = document.querySelector ('#mensaje');
    const formulario = document.querySelector ('#formulario');
    
    

//  evento
inputEmail.addEventListener ('blur', validar);
    
inputNombre.addEventListener ('blur',validar);

inputTelefono.addEventListener ('blur' , validar);

inputMensaje.addEventListener ('blur' , validar);

    function validar (e) {
      
      if (e.target.value.trim () === '') {
        mostrarAlerta ( `El campo ${e.target.id}  es obligatorio ` ,e.target.parentElement);
     return;
      }

     if   ( e.target.id === 'email' &&  !validarEmail(e.target.value)){
        mostrarAlerta ('El email no es valido', e.target.parentElement)
        return;
     }

      limpiarAlerta (e.target.parentElement);
     // Asignando los valores
     email[e.target.name] = e.target.value.trim().toLowerCase();
     console.log(email)

     //Comprbando email
     comprobarEmail();
        }
    


    function mostrarAlerta (mensaje,referencia) {
        // Comprobando el alerta 
        const alerta = referencia.querySelector ('class_error');
        if (alerta) {
            alerta.remove();
        }


        // alerta con html 
        const error = document.createElement ('P')
        error.textContent =  mensaje;
        error.classList.add('class_error');


      // Inyectando erro al formulario 
      referencia.appendChild (error);
    }

        function limpiarAlerta(referencia) {
            const alerta = referencia.querySelector ('class_error');
        if (alerta) {
            alerta.remove();

        }
    } 
    function validarEmail (email) {
        const regex =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/ 
      return resultado ;
    }

function comprobarEmail () {
    
    }

  

  
});