<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Camiseta Pólo','100','10','1']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Calça Jeans','200','15','1']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Camiseta Manga Longa','150','12','1']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['PC Gamers','150','12','2']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Impressora Jato Tinta','150','12','2']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Mouse','150','12','2']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Carolina Herrera','150','12','3']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Cama Casal','150','12','4']);
        DB::insert('insert into produtos(nome,preco,estoque,categoria_id) values (?,?,?,?)',['Guarda Roupa','150','12','4']);
    }
}
