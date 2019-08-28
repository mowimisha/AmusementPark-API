<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
        //
        'card_id' => App\Card::all(['id'])->random(),
        'transaction_no' => App\Card::all(['id'])->random(),
        'activity_id' => App\Activity::all(['id'])->random(),
        'ticket_id' => App\Booking::all(['id'])->random(),
        'cost' => $faker->numberBetween($min = 1000, $max = 9000),
        'member_id' => App\Member::all(['id'])->random(),
    ];
});
