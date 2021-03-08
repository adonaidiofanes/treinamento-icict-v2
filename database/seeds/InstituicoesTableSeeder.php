<?php

use Illuminate\Database\Seeder;

class InstituicoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituicoes')->insert([
            [
                'id' => 1, 'orgao' => 'Fiocruz - Fundação Oswaldo Cruz'
            ],
            [
                'id' => 2, 'orgao' => 'Butantan'
            ],
        ]);
    }
}
