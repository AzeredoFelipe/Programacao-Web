<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Permitir atribuição em massa para os seguintes campos
    protected $fillable = ['nome', 'marca', 'preco', 'quantidade'];
}
