<?php

$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "email" => $faker->name,
        "mobile" => $faker->name,
        "address" => $faker->name,
        "pin" => $faker->name,
        "state" => $faker->name,
    ];
});
