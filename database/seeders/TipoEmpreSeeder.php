<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TipoEmpreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_empreendimento')->insert(
            [
                [
                    'tipo'     => 'Obra Especial (Outros)', 
                ],
                [
                    'tipo'     => 'Obra Especial (Infraestrutura)', 
                ],
                [
                    'tipo'     => 'Parcelamento do Solo', 
                ],
                [
                    'tipo'     => 'Drenagem Pluvial', 
                ],
                [
                    'tipo'     => 'Pavimentação', 
                ],
                [
                    'tipo'     => 'Extração (Geral)', 
                ],
                [
                    'tipo'     => 'Supressão (Geral)', 
                ],
                
            ]);
    }
}
