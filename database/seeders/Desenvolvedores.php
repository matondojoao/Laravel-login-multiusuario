<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Desenvolvedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::insert('insert into desenvolvedors (nome, cargo) values (?, ?)', ['Bernardo Silva', 'Analista Pleno']);
        DB::insert('insert into desenvolvedors (nome, cargo) values (?, ?)', ['Carlos Arnaldo', 'Analista Senior']);
        DB::insert('insert into desenvolvedors (nome, cargo) values (?, ?)', ['Paulo Simas', 'Programador Jr']);
    }
}
