<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome_fantasia',   // Nome fantasia do cliente
        'razao_social',     // Razão social do cliente
        'cnpj',             // CNPJ do cliente
        'endereco',         // Endereço do cliente
        'cidade_id',        // ID da cidade (se aplicável)
        'estado',           // Estado do cliente
        'cep',              // CEP do cliente
        'telefone',         // Telefone do cliente
        'email',            // Email do cliente
    ];

    /**
     * Os atributos que devem ser convertidos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];    
}
