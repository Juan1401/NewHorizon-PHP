<?php

$server = "phpmyadmin.test"; //Virtual Host asigando para php my admin.
$database = "finanzas_personales";
$username = "juaquihu";
$password = "Naranja-1401";

$connection = new PDO("mysql:dbname=$database;host=$server", $username, $password);

$setnames = $connection->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);