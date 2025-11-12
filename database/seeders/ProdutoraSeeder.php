<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert(
            [
            [
                'nome' => "Warner Bros",
                'descricao' => 'Fez xubidu :)',
                'nacionalidade_id' => 1
            ],
            [
                'nome' => "Marvel",
                'descricao' => 'Já foi melhor',
                'nacionalidade_id' => 4
            ],
            [
                'nome' => "Disney",
                'descricao' => 'Princesas hihihi',
                'nacionalidade_id' => 3
            ],
            [
                'nome' => "DC",
                'descricao' => 'Nunca foi melhor',
                'nacionalidade_id' => 1
            ],
            [
                'nome' => "Dreamworks",
                'descricao' => 'Fez o melhor filme já criado vulgo Gato de Botas 2',
                'nacionalidade_id' => 2
            ],
            ]
        );
    }
}
