<?php

// include("constantes.php");
// echo PROFESION;

//Solo lanza warning pero no detiene el proyecto.
// include("constans.php");
// echo PROFESION;

//DA UN ERROR por que no encontró el archivo.
// require("constants.php");
// echo PROFESION;

//Aqui lanza un warning ya que estamos mandandolo 2 veces.
// include("constantes.php");
// include("constantes.php");
// echo PROFESION;


//Si se llamá mas de 2 veces el archivo omite uno de los llamados y solo deja uno de ellos.
include_once("constantes.php");
include_once("constantes.php");
echo PROFESION;