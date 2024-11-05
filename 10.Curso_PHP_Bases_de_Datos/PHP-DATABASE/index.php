<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

require "vendor/autoload.php";


//** Forma 1 -> bind_param de MySQLi para insertar datos */
// $incomes_controller = new IncomesController();
// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"), //2022-06-14 20:18:18;
//     "amount" => 818,
//     "description" => "Test"
// ]);

/**Forma 2 -> bindParam de PDO para insertar datos*/
// $incomes_controller = new IncomesController();
// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"), //2022-06-14 20:18:18;
//     "amount" => 818,
//     "description" => "TestIncomeController"
// ]);


/** Inserción de datos - bindValue   */
// $withdrawal_controller = new WithdrawalsController;
// $withdrawal_controller->store([
//     "payment_method" => PaymentMethodEnum::CreditCard->value,
//     "type" => WithdrawalTypeEnum::Purchase->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 50,
//     "description" => "Como jueguetitos con BindParam"
// ]);

//Utilización de FetchALL con método store
/* $withdrawal_controller = new WithdrawalsController;
$withdrawal_controller->index(); */

/*Utilización de Fetch con metodo Show */
// $withdrawal_controller = new WithdrawalsController;
// $withdrawal_controller->show(1);

/*Utilización de Fetch para traer varios registros. */
$withdrawal_controller = new IncomesController;
$withdrawal_controller->index();