<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run() {

        DB::table('categorias')->insert([

            'nombre_categoria' => 'Triciclos',
            
        ]);

        DB::table('categorias')->insert([

            'nombre_categoria' => 'Peluches',
            
        ]);

        DB::table('categorias')->insert([

            'nombre_categoria' => 'Legos y Puzzles',
            
        ]);

        DB::table('categorias')->insert([

            'nombre_categoria' => 'Muñecas',
            
        ]);

    }
}
