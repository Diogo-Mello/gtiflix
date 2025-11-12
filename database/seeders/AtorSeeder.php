<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(

            [
                [
                    'nome' => "Robert Downey Jr.",
                    'descricao' => "I am Iron Man",
                    'nacionalidade_id' => 2,
                    'nascimento' => '2003-08-11'
                ],
                [
                    'nome' => "Daniel Radcliffe",
                    'descricao' => "Expecto Patronum",
                    'nacionalidade_id' => 3,
                    'nascimento' => '1989-07-23'
                ],
                [
                    'nome' => "Margot Robbie",
                    'descricao' => "Eu sou a Barbie Girl",
                    'nacionalidade_id' => 4,
                    'nascimento' => '1990-07-02'
                ],
                [
                    'nome' => "Eddie Murphy",
                    'descricao' => "A gente já chegou?",
                    'nacionalidade_id' => 1,
                    'nascimento' => '1961-04-03'
                ],
                [
                    'nome' => "Adam Sandler",
                    'descricao' => "Adam Sandler",
                    'nacionalidade_id' => 1,
                    'nascimento' => '1966-09-09'
                ]
                ]
        );
    }
}
