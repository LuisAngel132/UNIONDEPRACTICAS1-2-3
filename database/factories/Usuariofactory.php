<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $correo=$faker->unique()->safeEmail;
    $contrasena=$faker->word;
$rol=$faker-> numberBetween(2,5);
    return [
        'correo' => $correo,
        'contraseña'=> Hash::make($contrasena),
        'rol_asignado_por_permisos'=>$rol,
        'aceptacion'=>'1',
        'codigo'=>'1',
    ];
});
//    $edad=$faker-> numberBetween(1,50);
