<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
protected $table='productos';

public function Comentarios(){
    return $this->hasMany('App\modelos\Comentarios');

} public function Personas(){

    return $this->hasMany('App\modelos\Producto');

}
}
