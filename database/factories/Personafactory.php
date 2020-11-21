<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
   
   $nombre=$faker->word;
   $appaterno=$faker->word;
   $apmaterno=$faker->word;
   $sexo=$faker->randomElement(['F','M']);
   $edad=$faker->numberBetween(15,70);
   $usuario=$faker->numberBetween(1,49);
   $documentacion=$faker->numberBetween(1,49);

    return [
        'nombre'=>$nombre,
        'apellidopaterno'=>$appaterno,
        'apellidomaterno'=> $apmaterno,
        'sexo'=>$sexo,

        'edad'=>$edad,
        'usuario'=> $usuario,
        'documentos'=> $documentacion,
    ];
});
