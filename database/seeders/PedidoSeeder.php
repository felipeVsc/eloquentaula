<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pedido')->insert([
            'id_pedido' => 1,
            'id_livro' => 1
        ]);
        DB::table('pedido')->insert([
            'id_pedido' => 2,
            'id_livro' => 3
        ]);
    }
}
