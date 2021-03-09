<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPapeis extends Migration
{
    public function up()
    {
        Schema::create('papeis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('papeis');
    }
}
