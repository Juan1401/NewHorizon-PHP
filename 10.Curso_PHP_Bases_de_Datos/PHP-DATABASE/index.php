<?php

use App\Controllers\IncomesController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;

require "vendor/autoload.php";


$incomes_controller = new IncomesController();
$incomes_controller->store([
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"), //2022-06-14 20:18:18;
    "amount" => 818,
    "description" => "Test"
]);





