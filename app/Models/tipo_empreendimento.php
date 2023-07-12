<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_empreendimento extends Model
{
    use HasFactory;
    protected $table = 'tipo_empreendimento';

    protected $fillable = ['tipo'];

    public function licencas(){

        return $this->hasMany(Licencas::class);
    }
}
