<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaInfracoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infracoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo', ['Internet', 'Presencial']);
            $table->enum('tipo_produto', [
                'composto_lacteo',
                'formula_infantil', 
                'leites',
            ]);
            $table->string('empresa');
            $table->string('marca');
            $table->enum('estado', ["AC", "AL", "AM", "AP", "BA", "CE", "DF", "ES", "GO", "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI", "RJ", "RN", "RO", "RS", "RR", "SC", "SE", "SP", "TO"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('infracoes');
    }
}
