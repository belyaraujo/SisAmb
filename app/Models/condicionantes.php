<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicionantes extends Model
{
    use HasFactory;
    protected $table = 'condicionantes';

    protected $fillable = ['id_licencas'];
}
