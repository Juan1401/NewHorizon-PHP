<?php 

//Incluimos los archivos que contienen las clases.
include 'classes/User.php';
include 'classes/Person.php';
include 'classes/Admin.php';

// * A la variable $user sera un usuario
$user = new User;

// ! El usuario sera de tipo Admin a travez de su propiedad de tipo.
$user->type = new Admin;

// ? Utilizamos la función greet debido a que el tipo de Admin herada las propiedades de Person.php
echo $user->type->greet();
