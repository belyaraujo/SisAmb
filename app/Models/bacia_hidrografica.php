<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacia_hidrografica extends Model
{
    use HasFactory;

    protected $table = 'bacia_hidrografica';

    protected $fillable = ['bacia'];
}
