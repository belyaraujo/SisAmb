<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licencas extends Model
{
    use HasFactory;
    protected $table = 'licencas';

    protected $fillable = [
        'id_ra',
        'id_empreendimento',
        'id_tipo', 
        'id_situacao',
        'id_bacia',
        'empreendimento',
        'latitude',
        'longitude',
        'num_processo',
        'ano',
        'data_concessao',
        'data_vencimento',
        'validade',
        'periodo_vigencia',
        'prazo_renovacao',
        'observacao',
        'interessado',
        'doc_sei',
        'processo'
    ];
}
