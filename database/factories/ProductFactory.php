<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'discriptions'=>$faker->paragraph(5),
        'unit'=>$faker->randomElement(['kilogram','quantity','meter']),
        'price'=>$faker->randomFloat(2,10,30),
        'total'=>$faker->numberBetween(2,20),
        'category_id'=>$faker->numberBetween(1,50),
    ];
});


