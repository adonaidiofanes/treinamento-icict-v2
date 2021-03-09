<?php

use Illuminate\Database\Seeder;

class PapeisPermissoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papeis_permissoes')->insert([
            // Moderador Master
                // Infracoes
                ['papel_id' => 1, 'permissao_id' => 1], // ler infracao
                ['papel_id' => 1, 'permissao_id' => 2], // editar infracao
                ['papel_id' => 1, 'permissao_id' => 3], // excluir infracao
                ['papel_id' => 1, 'permissao_id' => 4], // criar infracao
                // Vacinas
                ['papel_id' => 1, 'permissao_id' => 5], // ler vacina
                ['papel_id' => 1, 'permissao_id' => 6], // editar vacina
                ['papel_id' => 1, 'permissao_id' => 7], // excluir vacina
                ['papel_id' => 1, 'permissao_id' => 8], // criar vacina

            // Moderador
                // Infracoes
                ['papel_id' => 2, 'permissao_id' => 1], // ler infracao
                ['papel_id' => 2, 'permissao_id' => 2], // editar infracao
                ['papel_id' => 2, 'permissao_id' => 3], // excluir infracao
                ['papel_id' => 2, 'permissao_id' => 4], // criar infracao
                // Vacinas
                ['papel_id' => 2, 'permissao_id' => 5], // ler vacina
                ['papel_id' => 2, 'permissao_id' => 6], // editar vacina
                ['papel_id' => 2, 'permissao_id' => 7], // excluir vacina
                ['papel_id' => 2, 'permissao_id' => 8], // criar vacina

            // Visa
                // Infracoes
                ['papel_id' => 3, 'permissao_id' => 1], // ler infracao
                // ['papel_id' => 3, 'permissao_id' => 2], // editar infracao
                // ['papel_id' => 3, 'permissao_id' => 3], // excluir infracao
                // ['papel_id' => 3, 'permissao_id' => 4], // criar infracao
                // Vacinas
                ['papel_id' => 3, 'permissao_id' => 5], // ler vacina
                // ['papel_id' => 3, 'permissao_id' => 6], // editar vacina
                // ['papel_id' => 3, 'permissao_id' => 7], // excluir vacina
                // ['papel_id' => 3, 'permissao_id' => 8], // criar vacina
        ]);
    }
}
