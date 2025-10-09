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
                    'diretor_id' => 3,
                    'produtora_id' => 2,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Five Nights At Freddy",
                    'diretor_id' => 1,
                    'produtora_id' => 1,
                    'nacionalidade' => 2
                ],
                [
                    'nome' => "Shrek",
                    'diretor_id' => 2,
                    'produtora_id' => 5,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Indiana Jones",
                    'diretor_id' => 3,
                    'produtora_id' => 3,
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Aquaman",
                    'diretor_id' => 1,
                    'produtora_id' => 4,
                    'nacionalidade_id' => 2
                ]
                ]
        );
    }
}
