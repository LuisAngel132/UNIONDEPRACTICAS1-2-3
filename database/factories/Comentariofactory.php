<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\Comentario;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->word,
        'comentario'=>$faker->word,
        'persona'=>$faker->numberBetween(1,49),
        'producto'=>$faker->numberBetween(1,49),        
    ];
});
