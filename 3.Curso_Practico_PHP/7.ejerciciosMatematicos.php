<?php

/*opteniendo el maximo y el minimo de un numero*/
function maximo($numeros){
   $mayor= max($numeros);
   return $mayor;
}
function minimo($numeros){
    $menor= min($numeros);
    return $menor;
}

$coleccion=array(3,4,8,6,0,10,1,5);

echo "El valor mas alto es:".maximo($coleccion)."\n";

echo "El valor mas bajo es:".minimo($coleccion)."\n";

/*funcion que calcula el area de un circulo
usando como parametro su radio*/
function calcular_area_circulo($radio){
   $area= pow((pi() * $radio), 2);
   return $area;
}

echo "calcula el are de un circulo con radio = 6 \n";
echo "el radio es: ".calcular_area_circulo(6)."\n";

/*funcin que tira un dado de 6 caras su sacas 6 ganas 
si no pierdes*/

function dado(){
   return rand(1,6);
}

if(dado() == 6){
    echo "ganaste";
}else{
    echo "perdiste";
}
echo "\n";

/*optiene la raiz cuadrada de un numero dado*/

function raiz($numero){
return sqrt($numero);
}

echo "la rais cuadrada de 4 es: ".raiz(4)."\n";


?>