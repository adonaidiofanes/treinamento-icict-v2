<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPapeisPermissoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeis_permissoes', function (Blueprint $table) {
            $table->unsignedBigInteger('papel_id');
            $table->unsignedBigInteger('permissao_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papeis_permissoes');
    }
}
