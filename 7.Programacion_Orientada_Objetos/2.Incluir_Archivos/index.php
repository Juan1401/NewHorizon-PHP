<?php 

//! Da una advertencia, Sí no encuentra el archivo (o no existe) 
// include 'greet.php';

//** Da un error FATAL si no encuentra el archivo (o no existe) y detiene el sistema.
// require 'greet.php';

//** */ Evita que tengamos un error si llamamos varias veces al archivo con una "REQUIRE" */
require_once 'greets.php';

echo greets('Juan Jose','Trabaja duro y seras lo que te propones...');


