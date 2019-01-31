<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shop::class, function (Faker $faker) {
    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'vatin' => $faker->numberBetween(1000000, 9999999),
        'name' => $faker->company,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'country' => $faker->country,
        'state' => $faker->state,
        'state_abbr' => $faker->stateAbbr,
        'city' => $faker->city,
        'address' => $faker->streetAddress,
        'postcode' => $faker->postcode,
    ];
});
