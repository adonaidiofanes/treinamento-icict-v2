<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_vacinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_vacina');
            $table->timestamps();
        });

        Schema::table('user_vacinas', function (Blueprint $table) {
            // Alterar a tabela e determinar as chaves estrangeiras
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_vacina')->references('id')->on('vacinas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_vacinas');
    }
}
