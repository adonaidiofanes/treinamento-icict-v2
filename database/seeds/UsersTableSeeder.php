<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Adonai Diofanes',
                'email' => 'adonaibm@gmail.com',
                'password' => bcrypt('password'),
                'cpf' => '11111111111',
                'papel_id' => 1, // Moderador Master
            ],
            [
                'name' => "Moderador",
                'email' => "moderador@fiocruz.br",
                'password' => bcrypt('password'),
                'cpf' => '11111111112',
                'papel_id' => 2,
            ],
            [
                'name' => "Usuário Visa",
                'email' => "visa@fiocruz.br",
                'password' => bcrypt('password'),
                'cpf' => '11111111113',
                'papel_id' => 3,
            ],
            [
                'name' => "Pesquisador Colaborador",
                'email' => "colaborador@fiocruz.br",
                'password' => bcrypt('password'),
                'cpf' => '11111111114',
                'papel_id' => 4,
            ],
            [
                'name' => "Pesquisador Responsável",
                'email' => "pesq.resp@fiocruz.br",
                'password' => bcrypt('password'),
                'cpf' => '11111111115',
                'papel_id' => 5,
            ],
            [
                'name' => "Vigilante",
                'email' => "vigilante@fiocruz.br",
                'password' => bcrypt('password'),
                'cpf' => '11111111116',
                'papel_id' => 6,
            ]
        ]);
    }
}
