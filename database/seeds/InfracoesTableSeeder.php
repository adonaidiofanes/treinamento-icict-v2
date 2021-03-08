<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class InfracoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infracoes')->insert([
            [
                'id' => 1,
                'tipo' => 'Internet',
                'tipo_produto' => 'formula_infantil', // composto_lacteo, formula_infantil, leites
                'empresa' => 'Nestlé',
                'marca' => 'Ninho',
                'estado' => 'RJ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'tipo' => 'Presencial',
                'tipo_produto' => 'composto_lacteo',
                'empresa' => 'Nestlé',
                'marca' => 'Ninho Fases 1',
                'estado' => 'MG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'tipo' => 'Presencial',
                'tipo_produto' => 'formula_infantil',
                'empresa' => 'Nestlé',
                'marca' => 'Barra Mansa',
                'estado' => 'PB',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'tipo' => 'Presencial',
                'tipo_produto' => 'leites',
                'empresa' => 'Danone',
                'marca' => 'NAN',
                'estado' => 'SC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'tipo' => 'Internet',
                'tipo_produto' => 'leites',
                'empresa' => 'Danone',
                'marca' => 'Ninho Hora de Dormir',
                'estado' => 'PR',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
