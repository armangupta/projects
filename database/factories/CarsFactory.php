<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford','honda','toyota']),
        'model' => $faker->randomElement(['CRV','civic','terrain']),
        'year' => $faker->randomElement(['1994','1995','1996','1997']),
    ];
});
