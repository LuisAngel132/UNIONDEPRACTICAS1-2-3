<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\modelos\documentacion;

use Faker\Generator as Faker;

$factory->define(documentacion::class, function (Faker $faker) {
    return [
        'foto'=>'storage/app/documentacion/imagenes/perfil',
        
    ];
});
