<?php 

/*
Comillas simples

El texto se muestra en un texto de una linea

- El backslash no permite colocar mas texto 
*/
echo 'Un texto de una linea
Varias lineas
comilla simple \' backslash \\ continuar con mas texto 
$variable <br>';


/*
Comillas dobles

Nos permite mostrar variables sin necesidad de concatenación,
como seria el caso para cuando se use comillas simples.
*/
$name = 'Juan Jo';

echo "Mi nombre es $name <br>";


/*
Datos Complejos con comillas

Para acceder a datos complejos como un objeto o un array con varios niveles necesitamos utilizar {}
 (llaves) que encierren a la variable con los parámetros que indicamos.

Se puede dar el caso de cuando es un objeto,
y este solo tiene un nivel en su parámetro accedemos sin utilizar {} (llaves) 
y para indicar el key ponemos →, ej: $hora→segundos
*/

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User{

    public $name = 'Juan Jose';

}
$user = new User;

echo "$user->name quiere aprender {$courses['backend'][0]}";


/*
Variables Variables.

Y si necesitamos utilizar las variables variables, lo hocemos añadiendo 
$ antes de las {} (llaves) para que búsque la variable variable.

La variable variable debe tener exactamente el mismo nombre que el
dato que tiene la variable principal, 
deben coincidir tanto en lo que dice como si está en mayúscula o no.

También para hacer más legible el código podemos encerrar esta 
llamada a una variable dentro de otra {} (llaves). Ej: {${getLove()}}

*/
$teacher = 'italo';
$italo = 'profesor de PHP';

echo "$teacher es ${$teacher}";

function getTeacher(){

    return 'teacher';
}

$teacher = 'italo';

echo "{${getTeacher()}} enseña PHP ";

?>