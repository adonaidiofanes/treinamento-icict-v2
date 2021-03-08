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
                'password' => bcrypt('password')
            ],
            [
                'name' => str_random(10),
                'email' => str_random(10) . "@fiocruz.br",
                'password' => bcrypt('password')
            ],
            [
                'name' => str_random(10),
                'email' => str_random(10) . "@fiocruz.br",
                'password' => bcrypt('password')
            ]
        ]);
    }
}
