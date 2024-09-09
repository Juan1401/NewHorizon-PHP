<?php

/*

En una tienda de ropa hay descuento del 35% en todos sus productos,
debes realizar una función que reciba el valor de cada producto 
y le reste el 35% para mostrar luego su valor original y en cuánto 
queda su nuevo valor a pagar.

*/

$cantidadProductos = ((int)readline("Ingrese la cantidad de productos: "));


function getDescuento35($cantidadProductos){
    $productos = [];
for ($i=0,$j=1; $i < $cantidadProductos; $i++ , $j++) { 

         $precioProducto = readline("Ingresa el precio del producto #".$j.": ");
        array_push($productos, $precioProducto ); //primero va el array y luego la asignación
}

for ($i=0, $j=1; $i < count($productos) ; $i++, $j++) { 
    
        $productoDescuento = ($productos[$i] * 0.65) ; 
        echo "El producto #".$j." con valor: ".$productos[$i]. " Tien un valor con descuento de = ". $productoDescuento ;
        echo "\n";
    }
}

getDescuento35($cantidadProductos);

?>