<?php

use Illuminate\Database\Seeder;

class PermissoesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissoes')->insert([
            ['nome' => 'ler_infracao', 'descricao' => 'Ler infração'], // 1
            ['nome' => 'editar_infracao', 'descricao' => 'Editar infração'], // 2
            ['nome' => 'excluir_infracao', 'descricao' => 'Excluir infração'], // 3
            ['nome' => 'criar_infracao', 'descricao' => 'Criar infração'],
            
            ['nome' => 'ler_vacina', 'descricao' => 'Ler vacina'], // 5
            ['nome' => 'editar_vacina', 'descricao' => 'Editar vacina'],
            ['nome' => 'excluir_vacina', 'descricao' => 'Excluir vacina'],
            ['nome' => 'criar_vacina', 'descricao' => 'Criar vacina'],
        ]);
    }
}
