<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Usuarioseeder::class);
         $this->call(documentacionSeeder::class);

         $this->call(Personaseeder::class);
         $this->call(Productoseeder::class);
         $this->call(Comentarioseeder::class);

    }
}
