<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo')->insert(
            [
                [
                    'sigla'     => 'AUC', 
                    'descricao'     => 'Autorização em Unidade de Conservação',
                ],

                [
                    'sigla'     => 'AA', 
                    'descricao'     => 'Autorização Ambiental',
                ],
                [
                    'sigla'     => 'ASV', 
                    'descricao'     => 'Autorização De Supresão Vegetal',
                ],

                [
                    'sigla'     => 'LAS', 
                    'descricao'     => 'Licença Ambiental Simplificada',
                ],
                [
                    'sigla'     => 'LI', 
                    'descricao'     => 'Licença De Instalação',
                ],
                [
                    'sigla'     => 'LP', 
                    'descricao'     => 'Licença Prévia',
                ],
                [
                    'sigla'     => 'LO', 
                    'descricao'     => 'Licença De Operação',
                ],
             

            ]);
    }
}
