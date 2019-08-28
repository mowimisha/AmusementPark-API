<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        //
        'ticket_no' => $faker->creditCardNumber,
        'cost' => $faker->numberBetween($min = 1000, $max = 9000),
        'activities' => $faker->domainWord,
        'ticket_status' => $faker->domainWord,
        'ticket_duration' => $faker->randomDigit,


    ];
});
