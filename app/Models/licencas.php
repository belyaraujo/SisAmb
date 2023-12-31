<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Regiao_administrativa;
use App\Models\Bacia_hidrografica;
use App\Models\Situacao;
use App\Models\Tipo_empreendimento;
use App\Models\Tipo;
use App\Models\vigencia;
use App\Models\condicionantes;

class Licencas extends Model
{
    use HasFactory;
    protected $table = 'licencas';

    protected $fillable = [
        'id_ra',
        'id_empreendimento',
        'id_tipo', 
        'id_situacao',
        'id_vigencia',
        'empreendimento',
        'num_processo',
        'data_concessao',
        'data_vencimento',
        'validade',
        'observacao',
        'interessado',
        'doc_sei',
        'prazo_renovacao',
        'arquivo',
         // 'processo'
        // 'latitude',
        // 'longitude',
        // 'id_bacia',
    ];

    public function regiao_adm(){

        return $this->belongsTo(Regiao_administrativa::class, 'id_ra' , 'id');
    }

    public function bacia(){

        return $this->belongsTo(Bacia_hidrografica::class, 'id_bacia' , 'id');
    }

    public function situacao(){

        return $this->belongsTo(Situacao::class, 'id_situacao' , 'id');
    }

    public function tipo_empreendimento(){

        return $this->belongsTo(Tipo_empreendimento::class, 'id_empreendimento' , 'id');
    }

    public function tipo(){

        return $this->belongsTo(Tipo::class, 'id_tipo' , 'id');
    }

    public function vigencia(){

        return $this->belongsTo(vigencia::class, 'id_vigencia' , 'id');
    }

    public function condicionantes(){

        return $this->hasMany(condicionantes::class);
    }
}
