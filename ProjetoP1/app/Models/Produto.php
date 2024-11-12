<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categoria_id',
    ];

    /**
     * Relacionamento com a categoria.
     * Cada produto pertence a uma categoria.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Relacionamento com pedidos.
     * Um produto pode estar em vários pedidos.
     */
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('quantidade', 'preco');
    }
}
