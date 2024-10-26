<?php 

//Ejemplo de Variables variables

$dog = "woof!";
$cat = "meow!";

$horse = "Ijiji soy un caballo  soy un caballo!";

$option = 2;

switch($option){
    case 1:
        $var = "dog";
        break;
    case 2:
        $var = "horse";
        break;
}

echo $$var;
echo "\n";

// Ijiji soy un caballo  soy un caballo!  

/**
 * $$var seria el equivalante del valor de $var = horse ya que la opción de = 2
 * 
 * Entonces se veria representado como $horse porque sobrá un signo de dolar.
 * 
 * por lo tanto el valor resultante es: ""Ijiji soy un caballo  soy un caballo!"
 */