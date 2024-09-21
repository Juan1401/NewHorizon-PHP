<?php

$nombre = $_POST["nombre"];
// var_dump($nombre);

//SIRVE PARA VALIDAR SI UN CAMPO ESTA SETIADO O NO
/*
if(isset($nombre)){

    echo" <h1>El nombre ingresado es: ". $nombre . "</h1>";
}
else{
    echo" <h1>Algo no salio bien, al parecer no ingresaste un nombre</h1>";
}

//SIRVE PARA VALIDAR SÍ SE ENVIO EL CAMPO VACIO.
if(!empty($nombre)){

    echo" <h1>El nombre ingresado es: ". $nombre . "</h1>";
}
else{
    echo" <h1>Algo no salio bien, al parecer no ingresaste un nombre</h1>";
}
*/

//SE PUEDEN COMBINAR LAS DOS VALIDACIONES
if (isset($nombre) && (!empty($nombre)))
{
    echo" <h1>El nombre ingresado es: ". $nombre . " ✅ </h1>";
    echo "</br>";
}
else
{
    echo "No se ha enviado información al campo. ❌";
    echo "</br>";
}

//A su vez se puede validar si toda la info del formulario fue enviada.
if(isset($_POST["form"]) ){
    
    echo" <h1>Todo el formulario fue enviado ✅</h1>";
    echo "</br>";
}
else 
{
    echo"El formulario no se envió 🫠😓</h1>";
    echo "</br>";
}



