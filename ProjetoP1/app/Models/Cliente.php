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
        'cnpj',
        'endereco',
        'cidade',
        'estado',
        'cep',
        'telefone',
        'email',
    ];

    /**
     * Relacionamento com pedidos.
     * Um cliente pode ter vários pedidos.
     */
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
