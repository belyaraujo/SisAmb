<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\licencas;

class Condicionantes extends Model
{
    use HasFactory;
    protected $table = 'condicionantes';

    protected $fillable = ['id_licencas','condicionante','prazo_condicionante'];

    public function licencas(){

        return $this->belongsTo(licencas::class, 'id_licencas' , 'id');
    }

}
