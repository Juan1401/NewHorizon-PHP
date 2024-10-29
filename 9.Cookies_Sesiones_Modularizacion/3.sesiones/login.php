<?php

session_start();

$users = [

    array(
        "username" => "juanjo" ,
        "email" => "jjqh@gmail.com"
    ),

    array(
        "username" => "Miguelito" ,
        "email" => "mixzel@gmail.com"
    ),

    ];


$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];



?>