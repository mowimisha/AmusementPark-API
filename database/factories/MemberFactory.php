<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        //

        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'phone' => $faker->tollFreePhoneNumber,
        'member_type' => $faker->jobTitle,
        'account_id' => App\Account::all(['id'])->random(),
        'card_id' => App\Card::all(['id'])->random(),
    ];
});
