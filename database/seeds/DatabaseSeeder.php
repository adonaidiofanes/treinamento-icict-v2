<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissoesTableSeeder::class);
        $this->call(PapeisTableSeeder::class);
        $this->call(PapeisPermissoesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EnderecosTableSeeder::class);
        $this->call(InfracoesTableSeeder::class);
        $this->call(InstituicoesTableSeeder::class);
        $this->call(VacinasTableSeeder::class);
        $this->call(UserVacinasTableSeeder::class);
    }
}
