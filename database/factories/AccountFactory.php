<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        //
        'account_no' => $faker->bankAccountNumber,
        'amount' => $faker->numberBetween($min = 1000, $max = 9000),
        'balance' => $faker->numberBetween($min = 1000, $max = 5000),
        'last_deposit' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
