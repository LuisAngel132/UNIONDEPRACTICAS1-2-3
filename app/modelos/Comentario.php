<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table='comentarios';
    public function Personas(){

   return $this->hasMany('App\modelos\Persona');

    }
    public function Productos(){

        return $this->hasMany('App\modelos\Producto');

    }
}
