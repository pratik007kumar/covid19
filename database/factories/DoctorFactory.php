<?php

$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "email" => $faker->name,
        "phone" => $faker->name,
        "address" => $faker->name,
        "state" => $faker->name,
        "pin" => $faker->name,
    ];
});
