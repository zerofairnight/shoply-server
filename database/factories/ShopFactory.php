<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->sentence,
    ];
});
