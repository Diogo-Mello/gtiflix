<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nacionalidades')->insert(
            [
            ['nome' => "Brasil"],
            ['nome' => "Estados Unidos"],
            ['nome' => "Japão"],
            ['nome' => "França"],
            ]
        );
    }
}
