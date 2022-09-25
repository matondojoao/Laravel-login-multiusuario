<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::insert('insert into categorias (nome) value (?)',['Roupa']);
        DB::insert('insert into categorias (nome) value (?)',['Electronicos']);
        DB::insert('insert into categorias (nome) value (?)',['Perfumes']);
        DB::insert('insert into categorias (nome) value (?)',['Moveis']);
        DB::insert('insert into categorias (nome) value (?)',['Alimentos']);
        DB::insert('insert into categorias (nome) value (?)',['Informática']);
    }
}
