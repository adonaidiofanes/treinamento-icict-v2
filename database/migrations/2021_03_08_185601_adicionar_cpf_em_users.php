<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarCpfEmUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            // Adicionando o campo cpf
            $table->string('cpf')->after('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Verificar se o campo cpf existe na tabela users
        if (Schema::hasColumn('users', 'cpf')) {
            // Selecionando a tabela users
            Schema::table('users', function($table){
                // Apagando o atributo CPF
                $table->dropColumn('cpf');
            });
        }
    }
}
