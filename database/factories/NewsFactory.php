<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title'   => $faker->text(120),
        'desc'    => $faker->text(1500),
        'id_user' => 1

    ];
});
