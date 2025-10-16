<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
            [
                [
                    'nome' => "Vingadores Ultimato",
                    'descricao' => "Melhor filme da Marvel",
                    'diretor_id' => 3,
                    'produtora_id' => 2,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Five Nights At Freddy",
                    'descricao' => "Freddy é o melhor",
                    'diretor_id' => 1,
                    'produtora_id' => 1,
                    'nacionalidade' => 2
                ],
                [
                    'nome' => "Shrek",
                    'descricao' => "PUSS IN BOOTS",
                    'diretor_id' => 2,
                    'produtora_id' => 5,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Indiana Jones",
                    'descricao' => "Masson ta nesse filme",
                    'diretor_id' => 3,
                    'produtora_id' => 3,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Aquaman",
                    'descricao' => "Melhor filme da DC",
                    'diretor_id' => 1,
                    'produtora_id' => 4,
                    'nacionalidade_id' => 2
                ]
                ]
        );
    }
}
