<?php

use Faker\Generator as Faker;

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP','WEB','JAVA','JAVASCRIPT','DISEÑO WEB']),
        'description' => $faker->sentence

    ];
});
