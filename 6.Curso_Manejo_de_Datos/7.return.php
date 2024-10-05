<?php

//Forma parte de cualquier función
//Necesitamos Return precisamente para devolver y entregar con éxito lo que has procesado anteriormente
//retornamos y luego si imprimimos.
function greet()
{
    return "Hola...";
}
echo greet();

//FORMA DE RETORNAR MAS DE UNA VALOR POR MEDIO DE UN RETURN ES POR MEDIO DE UNA ARREGLO.
function greet2()
{
    return ["HOLA", "JUAN"];
}

print_r (greet2());

exit(); //detiene la ejecución del sistema
return; //retorna


?>