<?php


function suma(int $n1, int $n2): int {  // Especificó que la función retorna un entero.  int @parametro , int @parametro : resultado esperado 

    return $n1 + $n2;
}

suma("Revelde", 3); //Entonces si le mandamos otro tipo de dato, la función mandará un error.
echo "\n";


// 2 Ejemplo.
class Dummy {

    public $un_valor = "Cualquier cosa";

}

function suma1( Dummy $n1 ) : string {
    return $n1->un_valor;
}

echo suma1(new Dummy);
echo "\n";
