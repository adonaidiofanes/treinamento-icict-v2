<?php

use Illuminate\Database\Seeder;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            [
                'logradouro' => 'Av. Brasil',
                'numero' => '4365',
                'bairro' => 'Manguinhos',
                'cidade' => 'Rio de Janeiro',
                'estado' => 'RJ',
                'id_user' => 1,
            ],
            [
                'logradouro' => 'Av. Brasil',
                'numero' => '4366',
                'bairro' => 'Manguinhos',
                'cidade' => 'Rio de Janeiro',
                'estado' => 'RJ',
                'id_user' => 2,
            ],
            [
                'logradouro' => 'Av. Brasil',
                'numero' => '4367',
                'bairro' => 'Manguinhos',
                'cidade' => 'Rio de Janeiro',
                'estado' => 'RJ',
                'id_user' => 3,
            ],
        ]);
    }
}
