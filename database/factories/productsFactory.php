<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'code'=> $faker->word.$faker->numberBetween($min=1000,$max=9999),
        'name'=>$faker->word,
        'description'=>$faker->text($maxNbChars = 250),
        'short_description'=>$faker->text($maxNbChars = 50),
        'product_type_id'=>$faker->numberBetween($min=1, $max=3),
        'status_product_id'=>$faker->numberBetween($min=1, $max=4),
        'regular_price'=>$faker->randomFloat($nbMaxDecimals=2,$min=0,$max=99999),
        'sale_price'=>$faker->randomFloat($nbMaxDecimals=2,$min=0,$max=99999),
    ];
});
