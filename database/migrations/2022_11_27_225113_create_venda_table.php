<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->id('id_venda');
            $table->integer('id_pedido');
            $table->foreign('id_pedido')->references("id_pedido")->on("pedido");
            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references("id_cliente")->on("cliente");
            $table->string('valor_venda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
};
