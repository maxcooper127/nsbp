<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'ip' => '127.0.0.1',
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
    ];
});
