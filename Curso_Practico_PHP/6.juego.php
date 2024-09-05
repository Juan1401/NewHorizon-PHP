<?php

//RULETA RUSA
//MI CODIGO
// $ordendisparo = "y";

// $gatillo = strtolower(readline("Para disparar presionar y: "));

// while ($ordendisparo == "y" ){

// if($gatillo == "y"){

//     $balaRecamara= 2;
//     $disparo = rand(1,6);

//     switch ($disparo) {
//         case 1:
//             echo "Te salvaste perro1\n\n";
//             $ordendisparo = "n";
//             $ordendisparo = strtolower(readline("Dispara! presiona la letra 'y'"));
//                 if($ordendisparo != "y"){
//                     echo "Bamm estas muerto";
//                 }
//             break;
//         case 2:
//             echo "You're Dead! jaja";
//             $ordendisparo = "n";

//             break;
//         case 3:
//             echo "Te salvaste perro3\n\n";
//             $ordendisparo = "n";
//             $ordendisparo = strtolower(readline("Dispara! presiona la letra 'y' "));
//                 if($ordendisparo != "y"){
//                     echo "Bamm estas muerto";
//                 }

//             break;
//         case 4:
//             echo "Te salvaste perro4\n\n";
//             $ordendisparo = "n";
//             $ordendisparo = strtolower(readline("Dispara! presiona la letra 'y' "));

//                 if($ordendisparo != "y"){
//                     echo "Bamm estas muerto";
//                 }
//             break;
//         case 5:
//             echo "Te salvaste perro5\n\n";
//             $ordendisparo = "n";
//             $ordendisparo = strtolower(readline("Dispara! presiona la letra 'y' "));
//                 if($ordendisparo != "y"){
//                     echo "Bamm estas muerto";
//                 }
//             break;
//         case 6:
//             echo "Te salvaste perro6\n\n";
//             $ordendisparo = "n";
//             $ordendisparo = strtolower(readline("Dispara! presiona la letra 'y' "));
//                 if($ordendisparo != "y"){
//                     echo "Bamm estas muerto";
//                 }
//             break;
//         default:
//             $ordendisparo = "n";
//             break;
//     }
// }else{
//     echo "¡Dispara o moriras!";
// }
// }


//REFACTORIZADO 

// RULETA RUSA refactorizada

$playing = true;

while ($playing) {
    $gatillo = strtolower(readline("Para disparar presiona y: "));

    if ($gatillo === 'y') {
        $disparo = rand(1, 6);

        if ($disparo === 2) {
            echo "You're Dead! jaja";
            $playing = false;
        } else {
            echo "Te salvaste!\n";
            $playing = strtolower(readline("Dispara otra vez? (y/n): ")) === 'y';
        }
    } else {
        echo "¡Dispara o morirás!";
    }
}



?>