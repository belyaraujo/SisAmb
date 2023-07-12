<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiao_administrativa extends Model
{
    use HasFactory;
    protected $table = 'regiao_administrativa';

    protected $fillable = ['nome'];

    public function licencas(){

        return $this->hasMany(Licencas::class);
    }
}
