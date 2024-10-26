<?php

$outside_variable = "Esto es una variable";

// function my_funticion(){
//     global $outside_variable; //Solo función si definimos la variable como global.
//     echo $outside_variable;
// }

// my_funticion();

//VARIABLE GLOBALS
/**Como llamar a una variable global sin necesidad de usar global */
// VARIABLE PREDEFINIADA $GLOBALS 

function my_function() {
    global $outside_variable; //1RA Forma
    echo $outside_variable;
    echo $GLOBALS["outside_variable"]; //2da Forma
}

