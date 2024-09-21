<?php

//ARREGLOS ASOCIATIVOS
$edades = [ "JUAN" => 23, "MIGUEL" => 18, "OLGA" => 60 ];
echo ("La edad de juan es: " . $edades["JUAN"]);
echo  ("\n");

$cafes = [ "CAPUCHINOS" => 50, "LATTE" => 24 , "AMERICANO" => 25];
echo("El valor del cafe AMERICANO es de: " . $cafes["AMERICANO"]);
echo  ("\n");

//ARREGLOS DENTRO DE UNA ARREGLO
    //Existe una forma colocar arreglos sobre arreglos.

$personas = array(

    "MIGUEL" => array (
        "EDAD" => 18,
        "SEXO" => "M"
    ),
    "JUAN" => array (
        "EDAD" => 23,
        "SEXO" => "M"
    )
);
    // Y los arreglos asocitivos se llaman de esta forma
echo (" Hola esto es una prueba, la edad de Juan es: " . $personas["JUAN"]["EDAD"] . "Y la edad de Miguel es esta: " . $personas["MIGUEL"]["EDAD"]);
echo  ("\n");


?>