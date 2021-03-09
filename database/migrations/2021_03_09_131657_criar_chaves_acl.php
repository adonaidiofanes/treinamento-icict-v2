<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarChavesAcl extends Migration
{

    public function up()
    {
        // Adicionando o atributo papel_id na tabela users
        Schema::table('users', function (Blueprint $table){
            $table->unsignedBigInteger('papel_id');
            // Ligando via chave, o [users.papel_id] ao atributo [papeis.id]
            $table->foreign('papel_id')->references('id')->on('papeis');
        });

        // Setando as chaves estrangeiras da tabela pivot [papeis_permissoes]
        Schema::table('papeis_permissoes', function (Blueprint $table){
            // Ligando [papeis_permissoes.papel_id] => [papeis.id]
            $table->foreign('papel_id')->references('id')->on('papeis');
            // Ligando [papeis_permissoes.permissao_id] => [permissoes.id]
            $table->foreign('permissao_id')->references('id')->on('permissoes');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('users_papel_id_foreign');
        });

        Schema::table('papeis_permissoes', function (Blueprint $table){
            // Estamos apagando a chave estrangeira
            $table->dropForeign('papeis_permissoes_papel_id_foreign');
            $table->dropForeign('papeis_permissoes_permissao_id_foreign');
        });
    }
}
