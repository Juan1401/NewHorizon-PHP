<?php

$server = "phpmyadmin.test"; //Virtual Host asigando para php my admin.
$database = "finanzas_personales";
$username = "juaquihu";
$password = "Naranja-1401";

/**Forma Procedural */
// $mysqli = mysqli_connect($server,$database,$username,$password);

/**
 * Forma Procedural -Probar conexión 
 *  Sí mi conexión no fue estabecida entonces muestre el error.
 */

// if(!$mysqli){
//     die("Falló la conexión") . mysqli_connect_error();
// }

//Forma Orientada a Objetos
$mysqli = new mysqli($server,$username,$password,$database);

//Comprobración de error.
if($mysqli->connect_errno)
    die("Falló la conexión: {$mysqli->connect_error}");

//Esto nos ayuda a poder usar cualquier carater en nuestras consultas.
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);