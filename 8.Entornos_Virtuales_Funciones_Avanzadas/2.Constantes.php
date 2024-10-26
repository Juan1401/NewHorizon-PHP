<?php

// Define es Case Sensitive - Diferencia entre Mayusculas y Minusculas.
define("MICHI","Mr. Michi");
define("michi","otro. Michi");



 $decision = true;

if ($decision) {
    define("BLOCK_CONSTANT", "Esta constante fue declarada dentro de un if"); // VALIDO DENTRO DE BLOQUES DE CODIGO.

    const BLOCK_CONSTANT = "Esta constante fue declarada dentro de un if"; //INVALIDO PORQUE ESTA DENTRO DE UN BLOQUE DE CÓDIGO.


    echo BLOCK_CONSTANT;
} 

//DEFINE

class test{

    define("TEST", "Juan Jose"); // define no se valido dentro de una clase 
    const BLOCK_CONSTANT = "Esta constante fue declarada dentro de un if"; // CONST SI ES VALIDO

}

//Constantes Predefinidas.
echo E_ERROR;
echo "\n";
echo PHP_VERSION;
echo "\n";

//Constantes Magicas.
echo __LINE__;