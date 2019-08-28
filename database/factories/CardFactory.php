<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Card;
use Faker\Generator as Faker;

$factory->define(Card::class, function (Faker $faker) {
    return [
        //
        'card_no' => $faker->creditCardNumber,
        'card_status' => $faker->domainWord,
        'card_balance' => $faker->numberBetween($min = 1000, $max = 9000),
    ];
});
