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
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->id(); // Cria a chave primária 'id' para a tabela de relacionamento
            $table->foreignId('pedido_id') // Cria a chave estrangeira para a tabela 'pedidos'
                  ->constrained() // Define a chave estrangeira e o relacionamento
                  ->onDelete('cascade'); // Deleta os registros de 'pedido_produto' quando o pedido for excluído

            $table->foreignId('produto_id') // Cria a chave estrangeira para a tabela 'produtos'
                  ->constrained() // Define a chave estrangeira e o relacionamento
                  ->onDelete('cascade'); // Deleta os registros de 'pedido_produto' quando o produto for excluído

            $table->integer('quantidade'); // Quantidade do produto no pedido
            $table->decimal('preco_unitario', 8, 2); // Preço unitário do produto no momento da compra
            $table->timestamps(); // Adiciona as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_produto'); // Deleta a tabela 'pedido_produto' se ela existir
    }
};
