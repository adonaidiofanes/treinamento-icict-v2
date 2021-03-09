<?php

use Illuminate\Database\Seeder;

class PapeisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papeis')->insert([
            [ 'nome' => 'Moderador Master', 'descricao' => 'Administrador Master' ], // 1
            [ 'nome' => 'Moderador', 'descricao' => 'Moderador do sistema' ],       // 2
            [ 'nome' => 'Visa', 'descricao' => 'Descrição do Visa' ],
            [ 'nome' => 'Pesquisador Colaborador', 'descricao' => 'Papel de Pesquisador Colaborador' ],
            [ 'nome' => 'Pesquisador Responsável', 'descricao' => 'Papel de Pesquisador Responsável' ],
            [ 'nome' => 'Vigilante', 'descricao' => 'Papel de Vigilante' ],
            [ 'nome' => 'Cidadão', 'descricao' => 'Papel de Cidadão' ],
        ]);
    }
}
