<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Licencas;

class vigencia extends Model
{
    use HasFactory;

    protected $table = 'vigencia';

    protected $fillable = ['vigencia'];

    public function licencas(){

        return $this->hasMany(Licencas::class);
    }
}
