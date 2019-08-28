<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'phone' => $faker->tollFreePhoneNumber,
        'password' => $faker->password,
        'role' => $faker->randomElement($array = array ('dev','admin','cordinator', 'cashier')),
    ];
});
