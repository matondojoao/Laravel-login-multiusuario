<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class Alocacao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['1', '1','11']);
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['1', '2','12']);
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['2', '2','13']);
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['2', '3','22']);
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['3', '1','22']);
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['3', '2','33']);
        DB::insert('insert into alocacoes (desenvolvedor_id, projeto_id,horas_semanais) values (?, ?,?)', ['3', '3','5']);
    }
}
