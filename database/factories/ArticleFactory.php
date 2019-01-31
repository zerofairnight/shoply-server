<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'shop_id' => function () {
            return factory(App\Models\Shop::class)->create()->id;
        },
        'name' => $factory->name
    ];
});
