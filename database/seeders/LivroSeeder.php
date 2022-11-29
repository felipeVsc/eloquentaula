<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('livro')->insert([
            'id_livro' => 1,
            'titulo_livro' => fake()->name(),
            'id_editora' => 1
        ]);


        DB::table('livro')->insert([
            'id_livro' => 2,
            'titulo_livro' => fake()->name(),
            'id_editora' => 1
        ]);

        DB::table('livro')->insert([
            'id_livro' => 3,
            'titulo_livro' => fake()->name(),
            'id_editora' => 2
        ]);
    }
}
