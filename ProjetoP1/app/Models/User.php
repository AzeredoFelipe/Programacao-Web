<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',         // Nome do usuário
        'email',        // Email do usuário
        'password',     // Senha do usuário
        'tipo',         // Tipo de usuário (ex: vendedor, admin)
        'status',       // Status do usuário (ativo/inativo)
    ];

    /**
     * Os atributos que devem ser ocultados para serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',         // Ocultar senha
        'remember_token',   // Token de "lembrar"
    ];

    /**
     * Os atributos que devem ser convertidos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',  // Data de verificação do email
        'password' => 'hashed',             // Hash da senha
    ];
}
