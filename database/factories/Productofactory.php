<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'producto'=>$faker->word,
        'estadodelproducto'=>$faker->randomElement(['buen estado','dañado']),
'persona'=>$faker->numberBetween(1,49),
    ];
});
