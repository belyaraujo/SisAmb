<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class situacao extends Model
{
    use HasFactory;
    protected $table = 'situacao';

    protected $fillable = ['situacao'];
}
