<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

require "vendor/autoload.php";

// $incomes_controller = new IncomesController();
// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"), //2022-06-14 20:18:18;
//     "amount" => 818,
//     "description" => "Test"
// ]);

$withdrawal_controller = new WithdrawalsController;
$withdrawal_controller->store([
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 20,
    "description" => "Compre mucha comida para mis queridos y amados michis."
]);




