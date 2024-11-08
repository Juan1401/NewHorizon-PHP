<?php

require("../vendor/autoload.php");

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use Router\RouterHandler;

// Obtener la URL
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;

// incomes/1


switch ($resource) {

    case '/':
        echo "Estás en la front page";
        break;

    case "incomes":
        
        echo "Estás en incomes";

        break;

    case "withdrawals":
        
        echo "Estás en withdrawals";

        break;
    
    default:
        echo "404 Not Found";
        break;
    }
