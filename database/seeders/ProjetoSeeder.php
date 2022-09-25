<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::insert('insert into projetos (nome, estimativa_horas) values (?, ?)', ['Sistema de Alocao de Recursos', '200']);
        DB::insert('insert into projetos (nome, estimativa_horas) values (?, ?)', ['Sistema de Bibliotecas', '1000']);
        DB::insert('insert into projetos (nome, estimativa_horas) values (?, ?)', ['Sistema de Vendas', '2000']);
        DB::insert('insert into projetos (nome, estimativa_horas) values (?, ?)', ['Novo Sistema', '5000']);
    }
}
