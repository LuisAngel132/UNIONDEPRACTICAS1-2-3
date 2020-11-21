<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='personas';
public function Producto(){
    return $this->belongsTo('App\Producto');

}
}
