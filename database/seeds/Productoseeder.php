<?php
use App\modelos\Producto;

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB ;
class Productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            // ..
            'producto'=>'Laptop',
            'estadodelproducto'=>'buen estado',
            'persona'=>'50',

        ]);
        factory(Producto::class,49)->create();

    }
}
