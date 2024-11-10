<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'endereco',
        'cidade_id',
        'estado',
        'cep',
        'telefone',
        'email',
        'cidade',
        'estado',
    ];
}
