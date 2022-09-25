<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Desenvolvedores;
use Database\Seeders\ProjetoSeeder;
use Database\Seeders\Alocacao;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           Desenvolvedores::class,
           ProjetoSeeder::class,
           Alocacao::class,
       ]);
    }
}
