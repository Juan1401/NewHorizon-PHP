<?php

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";

//Traer el nombre del archivo 
$basename = $_FILES["image"]["name"];

echo $basename;