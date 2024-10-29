<?php


setcookie(
    name : "example_cookie",
    value : "un michi salvaje desde Configuració1n",
    expires_or_options : 0,
    path: "/9.Cookies_Sesiones_Modularizacion/2.cookies/platzi/configuracion", 
    domain: "localhost",
    secure: false,
    httponly: true
);



echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";





?>