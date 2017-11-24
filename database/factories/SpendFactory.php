<?php

use Faker\Generator as Faker;

$factory->define(App\Spend::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'pay_date' => $faker->DateTime,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 3000),
        'status' => $faker->randomElement( array( 'accound', 'paid')),
    ];
});
