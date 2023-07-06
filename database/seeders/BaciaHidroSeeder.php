<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BaciaHidroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bacia_hidrografica')->insert(
            [
                [
                    'bacia'     => 'Rio Preto', 
                ],
                [
                    'bacia'     => 'Rio Paranã', 
                ],
                [
                    'bacia'     => 'Rio Maranhão', 
                ],
                [
                    'bacia'     => 'Rio Descoberto', 
                ],
                [
                    'bacia'     => 'Lago Paranoá', 
                ],
                [
                    'bacia'     => 'São Bartolomeu', 
                ],
                [
                    'bacia'     => 'Rio Corumbá', 
                ],
                [
                    'bacia'     => 'Rio São Marcos', 
                ],
                
            ]);
    }
}
