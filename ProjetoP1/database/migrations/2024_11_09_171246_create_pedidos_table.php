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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id(); // Cria a chave primária 'id'
            $table->foreignId('cliente_id') // Cria a chave estrangeira 'cliente_id'
                  ->constrained() // Define o relacionamento com a tabela 'clientes'
                  ->onDelete('cascade'); // Se um cliente for deletado, os pedidos relacionados também são deletados
            $table->decimal('valor_total', 8, 2); // Define o valor total do pedido (máximo de 8 dígitos, 2 após o ponto decimal)
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos'); // Deleta a tabela 'pedidos'
    }
};
