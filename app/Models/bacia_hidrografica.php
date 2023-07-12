<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Licencas;

class Bacia_hidrografica extends Model
{
    use HasFactory;

    protected $table = 'bacia_hidrografica';

    protected $fillable = ['bacia'];

    public function licencas(){

        return $this->hasMany(Licencas::class);
    }
}
