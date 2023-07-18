<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VigenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vigencia')->insert(
            [
                [
                    'vigencia'     => 'Vigente', 
            
                ],
                [
                    'vigencia'     => 'Não vigente', 
            
                ],
                [
                    'vigencia'     => 'Renovada', 
            
                ],
                [
                    'vigencia'     => 'Renovação tácita', 
            
                ],
             
            ]);
    }
}
