<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB ;
use App\User;

class Usuarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $correoadministrador=config('app.mjadministrador');
        $contrasena =config('app.mjcontrasena');
        factory(User::class,49)->create();

        DB::table('usuarios')->insert([
            // ..
            'correo'=>$correoadministrador,
            'contraseña'=>Hash::make($contrasena),
            'rol_asignado_por_permisos'=>'4',
            'aceptacion'=>'1',
            'codigo'=>'1',


        ]);

    }
}
