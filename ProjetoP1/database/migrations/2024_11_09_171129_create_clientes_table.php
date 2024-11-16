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
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do cliente
            $table->string('razao_social'); // Razão Social
            $table->string('telefone'); // Telefone
            $table->string('cnpj')->unique(); // CNPJ único
            $table->string('endereco'); // Endereço
            $table->string('cidade'); // Cidade
            $table->string('estado'); // Estado
            $table->timestamps(); // Colunas created_at e updated_at
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
