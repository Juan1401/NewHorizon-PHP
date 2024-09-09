<?php

/*
Escribe una solución para una tienda donde se requiere encontrar el orden en el cual se publicarán los productos en su página web. Para esto, se debe contar con las dimensiones de cada producto y aquellos más grandes (en ancho y alto) estarán en los primeros lugares, y aquellos más pequeños estarán al final.

Tip: Como entrada, debes recibir el ancho y alto de cada producto. Analiza su tamaño y después puedes exponer la lista de productos en el orden requerido como un array.

¡Ahora espero ver tus soluciones en los comentarios! Estaremos compartiendo las soluciones de toda nuestra comunidad.

*/

// Función para ordenar los productos según su tamaño
function ordenarProductosPorTamano($productos) {
    // Usamos usort para ordenar el array de productos
    usort($productos, function($a, $b) {
        // Calculamos el área de los productos
        $areaA = $a['ancho'] * $a['alto'];
        $areaB = $b['ancho'] * $b['alto'];

        // Ordenamos de mayor a menor
        return $areaB - $areaA;
    });

    return $productos;
}

// Ejemplo de entrada con productos (ancho, alto)
$productos = [
    ['nombre' => 'Producto 1', 'ancho' => 50, 'alto' => 30],
    ['nombre' => 'Producto 2', 'ancho' => 20, 'alto' => 10],
    ['nombre' => 'Producto 3', 'ancho' => 40, 'alto' => 25],
    ['nombre' => 'Producto 4', 'ancho' => 30, 'alto' => 35],
];

// Llamamos la función y obtenemos los productos ordenados
$productosOrdenados = ordenarProductosPorTamano($productos);
// print_r($productosOrdenados);

// Imprimimos el resultado
foreach ($productosOrdenados as $producto) {
    echo $producto['nombre'] . " (Ancho: " . $producto['ancho'] . ", Alto: " . $producto['alto'] . ")";
    echo "\n";
}
?>