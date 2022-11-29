<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('venda')->insert([
            'id_venda' => 1,
            'id_pedido' => 1,
            'id_cliente' => 1,
            'valor_venda' => "22.90"
        ]);
        DB::table('venda')->insert([
            'id_venda' => 2,
            'id_pedido' => 2,
            'id_cliente' => 1,
            'valor_venda' => "49.90"
        ]);
    }
}
