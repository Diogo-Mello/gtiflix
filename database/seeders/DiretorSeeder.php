<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            [
                [
                    'nome' => "Martin Scorsese",
                    'descricao' => "Absolute Saynema",
                    'nacionalidade_id' => 2,
                    'nascimento' => '1942-11-17'
                ],
                [
                    'nome' => "Todd Philipps",
                    'descricao' => "Fez Se Beber Não Case",
                    'nacionalidade' => 3,
                    'nascimento' => '1970-12-20'
                ],
                [
                    'nome' => "Steven Spielberg",
                    'descricao' => "O maior diretor de todos os tempos",
                    'nacionalidade_id' => 1,
                    'nascimento' => '1946-12-18'
                ]
            ]
        );
    }
}
