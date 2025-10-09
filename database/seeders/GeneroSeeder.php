<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert(
            [
            ['nome' => "Terror"],
            ['nome' => "Ação"],
            ['nome' => "Romance"],
            ['nome' => "Comédia"],
            ['nome' => "Suspense"],
            ]
        );
    }
}
