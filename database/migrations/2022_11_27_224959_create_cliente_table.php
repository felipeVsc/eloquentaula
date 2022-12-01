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
        // $table->foreign('user_id')->references('id')->on('users');
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nome_cliente');
            $table->integer('id_endereco');
            $table->foreign('id_endereco')->references('id_endereco')->on('endereco'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
