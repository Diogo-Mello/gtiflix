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
            ['nome' => "Warner Bros"],
            ['nome' => "Marvel"],
            ['nome' => "Disney"],
            ['nome' => "DC"],
            ['nome' => "Dreamworks"],
            ]
        );
    }
}
