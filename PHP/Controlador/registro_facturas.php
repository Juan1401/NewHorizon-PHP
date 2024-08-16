<?php

// Validamos que el botón se haya presionado
if (!empty($_POST["btnregistrar"])){
    if(!empty($_POST["empresa_id"]) && !empty($_POST["prefijo"]) && !empty($_POST["factura_fiscal"]) && !empty($_POST["fecha_factura"])) {

        // Inicializar las variables con los valores recibidos
        $empresa_id = $_POST["empresa_id"];
        $prefijo = $_POST["prefijo"];
        $factura_fiscal = $_POST["factura_fiscal"];
        $fecha_registro = $_POST["fecha_factura"];

        // Asumiendo que ya tienes una conexión a la base de datos establecida en $conexion
        $sql = $conexion->query("INSERT INTO fac_facturas(empresa_id, prefijo, factura_fiscal, fecha_registro) VALUES('$empresa_id', '$prefijo', '$factura_fiscal', '$fecha_registro')");
        
        // Verificar si la consulta fue exitosa
        if($sql==1){
            echo '<div class="alert alert-success">Factura registrada</div>';
        } else {

            var_dump($sql);
            echo("\n"); 
            echo '<div class="alert alert-danger">Error al registrar la factura</div>';
        }

    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}
?>
