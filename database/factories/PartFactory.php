<?php

use Faker\Generator as Faker;

$factory->define(App\Part::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'day' => $faker->numberBetween($min = 1, $max = 7),
        'started' => $faker->DateTime,
    ];
});
