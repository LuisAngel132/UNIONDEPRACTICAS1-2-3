<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB ;
use App\modelos\Persona;

class Personaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Persona::class,49)->create();

        DB::table('personas')->insert([
            // ..
            'nombre'=>'Fernando',
            'apellidopaterno'=>'Gutierrez',
            'apellidomaterno'=>'Hernandez',
            'sexo'=>'M',
            'edad'=>'23',
            'usuario'=>'50',
            'documentos'=>'50',

        ]);

    }
}
