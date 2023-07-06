<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegiaoAdmSeeder extends Seeder{


    public function run()
    {
        DB::table('regiao_administrativa')->insert(
            [
                [
                    'nome'     => 'Plano Piloto', 
                ],
                [
                    'nome'     => 'Gama', 
                ],
                [
                    'nome'     => 'Taguatinga', 
                ],
                [
                    'nome'     => 'Brazlândia', 
                ],
                [
                    'nome'     => 'Sobradinho', 
                ],
                [
                    'nome'     => 'Planaltina', 
                ],
                [
                    'nome'     => 'Paranoá', 
                ],
                [
                    'nome'     => 'Núcleo Bandeirante', 
                ],
                [
                    'nome'     => 'Ceilândia', 
                ],
                [
                    'nome'     => 'Guará', 
                ],
                [
                    'nome'     => 'Cruzeiro', 
                ],
                [
                    'nome'     => 'Samambaia', 
                ],
                [
                    'nome'     => 'Santa Maria', 
                ],
                [
                    'nome'     => 'São Sebastião', 
                ],
                [
                    'nome'     => 'Recanto das Emas', 
                ],
                [
                    'nome'     => 'Lago Sul', 
                ],
                [
                    'nome'     => 'Riacho Fundo', 
                ],
                [
                    'nome'     => 'Lago Norte', 
                ],
                [
                    'nome'     => 'Candangolândia', 
                ],
                [
                    'nome'     => 'Águas Claras', 
                ],
                [
                    'nome'     => 'Riacho Fundo 2', 
                ],
                [
                    'nome'     => 'Sudoeste', 
                ],
                [
                    'nome'     => 'Varão', 
                ],
                [
                    'nome'     => 'Park Way', 
                ],

                [
                    'nome'     => 'Estrutural (SCIA)', 
                ],
                [
                    'nome'     => 'Sobradinho 2', 
                ],
                [
                    'nome'     => 'Jardim Botânico', 
                ],
                [
                    'nome'     => 'Itapoã', 
                ],
                [
                    'nome'     => 'Sia', 
                ],
                [
                    'nome'     => 'Vicente Pires', 
                ],
                [
                    'nome'     => 'Fercal', 
                ],
                [
                    'nome'     => 'Sol Nascente e Pôr do Sol', 
                ],
                [
                    'nome'     => 'Arniqueira', 
                ],
                [
                    'nome'     => 'Arapoanga', 
                ],
                [
                    'nome'     => 'Água Quente', 
                ],
                [
                    'nome'     => 'Brasília', 
                ],

                
            ]
        );
    }
}