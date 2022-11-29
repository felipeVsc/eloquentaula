<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('editora')->insert([
            'id_editora' => 1,
            'nome_editora' => "editora um",
            'id_endereco' => 2
        ]);
        DB::table('editora')->insert([
            'id_editora' => 2,
            'nome_editora' => "editora dois",
            'id_endereco' => 3
        ]);
    }
}
