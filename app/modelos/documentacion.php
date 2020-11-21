<?php

namespace App\modelos;

use Illuminate\Database\Eloquent\Model;

class documentacion extends Model
{
    protected $table='documentacion';
    public function Personas(){

        return $this->belongsTo('App\modelos\Persona');
    
    }
}
