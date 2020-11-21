<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB ;
use App\modelos\Comentario;
class Comentarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            // ..
            'titulo'=>'la calidad ',
            'comentario'=>'es de alta definicion pero contiene algunos detalles',
            'persona'=>'1',
            'producto'=>'1',

        ]);
        factory(Comentario::class,49)->create();

    }
}
