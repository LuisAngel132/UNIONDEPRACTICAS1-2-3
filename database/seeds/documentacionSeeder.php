<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB ;
use App\modelos\documentacion;
class documentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documentacion')->insert([
            // ..
            'foto'=>'storage/app/documentacion/imagenes/perfil',
            ]);
            factory(documentacion::class,49)->create();

    }
}
