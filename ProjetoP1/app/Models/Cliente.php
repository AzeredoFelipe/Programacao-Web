<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'razao_social',
        'telefone',
        'cnpj',
        'endereco',
        'cidade',
        'estado'
    ];
}
