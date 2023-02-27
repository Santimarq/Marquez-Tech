<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Marquez y asociados nos dedicamos al desarrolo de software ">
    <title>Marquez Technology</title>
 
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&family=Open+Sans&family=Oswald:wght@300&family=PT+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&family=Montserrat:wght@700&family=Open+Sans&family=Oswald:wght@300&family=PT+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="estilos.css">
<script src="https://kit.fontawesome.com/29d42a392c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="normalize.css">
</head>

<body>

    <header class="encabezado"> 
        <div class="contenido-nav">
            <div class="logo">
                
                <h2>Marquez <span>Technology</span></h2 >
                
            </div>


           
        <nav class="navegacion ocultar">
           <a href="#inicio"> Inicio</a> 
            <a href="#nosotros">Nosotros</a>
            <a href="#contactanos">Contactanos</a>
            <a href="#servicios">Servicios</a>
        </nav>
        <div class="hamburguesa">
        <span></span><span></span><span></span>
    </div>
    </div> <!--Temina el header-->

    <div class="contenido-encabezado contenedor">
        <div class="texto-encabezado">
            <h1>Siempre a la vanguardia de la tecnologia</h1>
        </div>


        <!-- Empieza codigo php formulario y base de datos --->
<?php
        // Conectando a la base de datos
        include '../marqueztech/back-end/basededatos.php';
        $db = conectarDB();

        // Array vacio de errrores para validar formulario
        $errores = [];

        $apellidoynombre = '';
        $correo = '';
        $telefono =  '';
        $mensaje = '';





        // Formulario 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $apellidoynombre = mysqli_real_escape_string( $db,  $_POST  ['apellidoynombre'] );
            $correo = mysqli_real_escape_string( $db , $_POST ['correo'] );
            $telefono = mysqli_real_escape_string( $db , $_POST ['telefono']);
            $mensaje = mysqli_real_escape_string( $db , $_POST ['mensaje']);


        // Validando formulario desde el back-end 
        if (!$apellidoynombre) {
            $errores[] = 'El campo nombre es obligatorio';
        } 
        if (!$correo) {
            $errores[] = 'El campo correo es obligatorio';
        }
        if (!$telefono) {
            $errores [] = 'El campo telefono es obligatorio ';
        }
        if ( strlen($mensaje)  < 25) {
            $errores [] = ' El campo mensaje es obligatorio';
        }



       // Si el array de errores esta vacio insertamos a la base de datos
       if (empty ($errores)) {

          // Insertar en la base de datos

          $query = "INSERT INTO usuariostech (apellidoynombre ,correo , telefono , mensaje) 
          VALUES   ('$apellidoynombre' ,
         '$correo', '$telefono', '$mensaje' )  ";
 
       // echo  $query;
 
        $resultado = mysqli_query($db , $query);

       
        

        // redireccionamos a contacto.php con mensaje para el usuario
        header('Location:\marqueztech\contacto.php');


       }
        
                }

          
     
        ?>  


     <?php foreach ($errores as $error ): ?>
        <div class="alerta error">
    
        </div>

        
         <?php endforeach ; ?>  




        <!--------- Empieza el formulario ----------->
        <form method='POST' class="formulario-encabezado" action=" \marqueztech\index.php"  >
            <h2> Contacta  con nosotros </h2>

            <div class="input-encabezado">
             <input id="nombre" type="text" placeholder="Nombre" required name="apellidoynombre" 
              value="<?php $apellidoynombre ; ?>">
            </div>

            <div class="input-encabezado">
                <input id="correo" type="mail" placeholder="Correo" required  name="correo" 
               value="<?php $correo ; ?>">   
            </div>


            <div class="input-encabezado">
                <input id="tel" type="tel" placeholder="Telefono" required name="telefono" 
                   value="<?php $telefono ; ?>">
            </div>
            <div class="boton-encabezado">
                <a href=""></a>
                <input class="btn azul" type="submit" value="Enviar"  required>
            </div>
          
        </form>
    </div>
         <!----- Termina el formulario ----------------->

    </header>

    
    
    <div    id="inicio"  class="ventajas">
        <div class="contenido-ventajas contenedor">
        <div class="ventaja">
            <i class="fa-solid fa-clock"></i>
            <h3>Entregas en tiempo en forma y forma</h3>
            <p>Digitalizamos tu negocio en tiempo record y <br> y al precio mas bajo del mercado</p>
        </div>
        <div class="ventaja">
            <i class="fa-solid fa-paintbrush"></i>
            <h3>Diseño de interfaces modernas</h3>
            <p>Tu web con las interfaces mas modernas <br> y adaptable a todos los dispositvos</p>
        </div>
        <div class="ventaja">
      <i class="fa-solid fa-code"></i>
            <h3> Software de calidad y productividad</h3>
            
            <p>Realizamos software de calidad para impulsar tu negocio de forma segura</p>
        </div>
                  </div>
        
    </div>

    <section id="nosotros" class="nosotros contenedor">
        <h2>Sobre nosotros</h2>
        <div class="contenido-nosotros">

            <div class="texto-nosotros">
                <h3>Creamos y innovamos con codigo</h3>
                <p>Desarrollamos   adaptandonos a las necesidades <br> objetivos del cliente y al sector que pertenece  </p>
            <!--  <a href="#" class="btn bordes">Mas información </a>   -->
            </div>
        </div>
    </section>

    <section id="servicios" class="servicios contenedor">
        <h2>Nuestros  servicios</h2>


   <div class=" contenido-servicio">

<div class="servicio">
    <i class="fa-solid fa-plane"></i>
 <h3>Lanzamiento</h3>
 <p>Lanzamos tu proyecto en tiempo record</p>
</div>

<div class="servicio">
    <i class="fa-solid fa-mobile-screen-button"></i>
     <h3>Desarrolo Movil</h3>
     <p> Tu proyecto adaptados a moviles</p>
    </div>
    
    <div class="servicio">
        <i class="fa-solid fa-key"></i>
         <h3>Seguridad</h3>
         <p> Calidad y ciberseguridad a tu disposicion</p>
        </div>
        

        <div class="servicio">
            <i class="fa-sharp fa-solid fa-laptop-code"></i>
             <h3>Diseño UX/UI</h3>
             <p> Diseño de la arquitectura de software,  <br> prototipos y la experiencia de los usuarios </p>
            </div>
            
            <div class="servicio">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                 <h3>SEO </h3>
                 <p> Search Engine Optimization </p>
                </div>

                <div class="servicio">
                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                     <h3>SEM</h3>
                     <p>Search Engine Marketing</p>
                    </div>
                    

   </div>

    </section>

    <section id="contactanos" class="contacto ">
        <a href="#">
        <h2>Contactanos</h2>
    </a>
        <div class="contenido-contacto">
            <div class="informacion-contacto">
                <h3>información de contacto</h3>
                <p>marqueztechnology@gmail.com</p>
                <p>+54 3482611758</p>
            </div>
            <!--Empieza Formulario -------->
            <form  method='POST'  class="formulario" id="formulario" action=""> 
            <div class="formulario-contacto">
                <div class="input-contacto">
                    <label for="nombre"> Apellido y Nombre</label>
                <input type="text" id="nombre"  name="apellidoynombre" placeholder="Apellido y nombre" required  
                 value="<?php $apellidoynombre ;?>">   
                
                      </div>

                      <div class="input-contacto">
                        <label for="email"> Correo</label>
                <input type="email" id="email" placeholder="Correo" name="correo" required   
                 value="<?php $correo; ?>">  
              </div>

              <div class="input-contacto">
                <label for="tel"> Teléfono</label>
                <input type="tel" id="telefono" placeholder=" Teléfono" name="telefono" required  
                 value="<?php $telefono; ?>">    
                 </div>
                 <div class="input-contacto">
                    <label for="">Mensaje</label>
                    <textarea  required name="mensaje" id="mensaje"> <?php echo $descripcion ;?> </textarea>
                        
                 </div>
                 <div class="input-contacto">
                    <input  type="submit" value="Enviar"  class="btn azul "> 
          
                  
                 </div>
            </div>
        
        </div>
         </form>
         <!--- Finaliza Formulario ---->
         </section>


    <footer class="footer">
        <div class="logo">
            <h2>Marquez <span>Technology</span></h2>
        </div>
      
            
            <p>Todos los derechos reservados <span class="fecha"></span> 
            &copy;Desarrollado por Santiago Marquez  </p> <br>
        
           
        


    </footer>



 <script src="proyecto.js"></script>   
 <script src="formulario.js"></script>
 
 
</body>
</html>

