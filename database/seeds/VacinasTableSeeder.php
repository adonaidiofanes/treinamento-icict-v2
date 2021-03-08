<?php

use Illuminate\Database\Seeder;

class VacinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacinas')->insert([
            [
                'id' => 1,
                'nome' => 'Sinovac (Coronavac)',
                'instituicao_id' => 2
            ],
            [
                'id' => 2,
                'nome' => 'Univ. of Oxford,AstraZeneca',
                'instituicao_id' => 1
            ],
            [
                'id' => 3,
                'nome' => 'Febre Amarela',
                'instituicao_id' => 1
            ],
            [
                'id' => 4,
                'nome' => 'Meningite A e C',
                'instituicao_id' => 1
            ],
        ]);
    }
}
