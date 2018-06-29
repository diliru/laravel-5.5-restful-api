<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(250, 1500),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(5, 40),
        'user_id' => function(){
            return App\User::all()->random();
        },

    ];
});
