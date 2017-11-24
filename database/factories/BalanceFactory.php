<?php

use Faker\Generator as Faker;

$factory->define(App\Balance::class, function (Faker $faker) {
    return [



        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 3000),
        'pricePart' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max =3000),
        'priceStay' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max =3000),
        'priceDebit' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max =3000),
        'priceCredit' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max =3000),

    ];
});
