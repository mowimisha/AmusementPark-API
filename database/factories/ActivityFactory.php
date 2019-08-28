<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        //
        'activity_name' => $faker->domainWord,
        'activity_cordinator' => $faker->name,
        'activity_cost' => $faker->numberBetween($min = 1000, $max = 9000),
        'activity_member_type' => $faker->domainWord,
        'activity_status' => $faker->domainWord,
    ];
});
