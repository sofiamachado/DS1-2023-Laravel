<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'pais',
        'chefe',
        'qtd'
    ];

    protected $table = 'comida';
    public $timestamps = false;

}
