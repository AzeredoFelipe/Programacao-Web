<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'telefone',
        'cnpj',
        'endereco',
        'cidade',
        'estado'
    ];
    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
