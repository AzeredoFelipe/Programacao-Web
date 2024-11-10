<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Cria a chave primária
            $table->string('nome'); // Definindo nome do cliente
            $table->string('email')->unique(); // Email único
            $table->string('telefone'); // Definindo campo para telefone
            $table->text('endereco'); // Campo para endereço
            $table->timestamps(); // Colunas 'created_at' e 'updated_at'

            // Caso você precise de um relacionamento com outra tabela, por exemplo, 'users'
            //$table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Exemplo de chave estrangeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
