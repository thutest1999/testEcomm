<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'slug' => $faker->slug,
        'subtitile' => $faker->sentence(5),
        'price' => $faker->numberBetween(10, 100) * 1000,
        'image' => 'img/img1.png',
    ];
});
