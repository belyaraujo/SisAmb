<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('situacao')->insert(
            [
                [
                    'situacao'     => 'Em cumprimento de condicionante', 
                ],
                [
                    'situacao'     => 'Obras não iniciadas', 
                ],
                [
                    'situacao'     => 'Obras não concluidas', 
                ],
                [
                    'situacao'     => 'Concluido', 
                ],
                
            ]);
    }
}
