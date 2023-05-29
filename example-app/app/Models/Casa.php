<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
    protected $fillable = [
        'imobiliaria',
        'endereco',
        'preco',
        'status',
    ];

    protected $table = 'Casa';
    public $timestamps = false;

}