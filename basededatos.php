<?php

// Conectando a la base de datos 

function conectarDB () :mysqli {
    $db = mysqli_connect( 'localhost' , 'root', '' , 'marquez_database');

 
   // Si falla la conexion detenemos el codigo
    if (!$db) {
        echo "No se pudo conectar a la base de datos";
        exit;
    }   return $db;
  
  
 //if ($db) {     echo "Se pudo conectar";
   // } else{
   //     echo "No se pudo conectar";
   // }
    

  
  
}

  
 