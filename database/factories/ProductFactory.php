<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(5),
        'price' => $faker->numberBetween(1,20),
        'vendor' => $faker->sentence(2),
    ];
});
