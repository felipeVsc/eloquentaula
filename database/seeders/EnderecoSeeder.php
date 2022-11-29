<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('endereco')->insert([
            'id_endereco' => 1,
            'rua_endereco' => "Rua dos Bobos",
            'cidade_endereco' => "Maceio"
        ]);
        DB::table('endereco')->insert([
            'id_endereco' => 2,
            'rua_endereco' => "Rua dos Sobob",
            'cidade_endereco' => "Massayo"
        ]);
        DB::table('endereco')->insert([
            'id_endereco' => 3,
            'rua_endereco' => "bobos da rua",
            'cidade_endereco' => "maceiyo"
        ]);
    }
}
