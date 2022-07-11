<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()  {
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       //Truncamos todas las tablas para generar nuevo contenido
        //en la B.D.
        
        $this->truncateTables([
            'migrations',
            'categorias',
            'juguetes',
            'categoria_juguete'
        ]);


        $this->call(CategoriasSeeder::class);
        $this->call(JuguetesSeeder::class);


    }

    public function truncateTables(array $tables)
    {
        //desactivamos la restriccion de claves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');


        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        //Activamos restrinccion de claves foraneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
