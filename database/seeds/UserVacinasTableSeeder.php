<?php

use Illuminate\Database\Seeder;

class UserVacinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_vacinas')->insert([
            ['id_user' => 1, 'id_vacina' => 1],
            ['id_user' => 1, 'id_vacina' => 2],
            ['id_user' => 1, 'id_vacina' => 3],
            ['id_user' => 1, 'id_vacina' => 4],
            ['id_user' => 2, 'id_vacina' => 2],
            ['id_user' => 3, 'id_vacina' => 1],
        ]);
    }
}
