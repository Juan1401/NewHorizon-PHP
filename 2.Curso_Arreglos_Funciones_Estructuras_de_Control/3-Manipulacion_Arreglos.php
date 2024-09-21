<?php

$edades = [ 18, 23, 60, 42];

//FUNCIONES PARA ARREGLOS

//COUNT()
//cuenta cuantos objetos hay en un arreglo
$resultado = count($edades);
echo ("$resultado");
echo ("\n");
// $ php 3-Manipulacion_Arrelos.php 
// 4

//ARRAY_PUSH()
//Añadir un elemento al final de mi arreglo. Ya sean de otros tipos de datos o incluso arreglos dentro arreglos.

// array_push ($edades, 13);
// array_push ($edades, "TEST");
array_push ($edades, ["CARLOS", array("EDAD" => 13)]);
var_dump($edades);
echo ("\n");

//is_array()
//Sirve para definir si es una arreglo o no - devuelve valor booleano.

$esto_no_es_un_arreglo = "";
var_dump(is_array($esto_no_es_un_arreglo) );
echo ("\n");


//explode()  es el split y sirve para crear un arreglo por cada objeto encontrado segun su separador.

$lista_de_frutas = "Fresa,Cereza,Manzana";
$resultado2 = explode("," , $lista_de_frutas );
var_dump($resultado2);
echo ("\n");

//implode()  Es lo contrario a explode y funciona para convertir un arreglos a string - no sirve para unir con base a un separador.

$lista_de_frutas_array = ["Fresa,Cereza,Manzana"];
$resultado3 = implode("," , $lista_de_frutas_array );
var_dump($resultado3);
echo ("\n");

?>