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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Cria a chave primária 'id'
            $table->string('nome'); // Nome do produto
            $table->decimal('preco', 8, 2); // Preço do produto, com até 2 casas decimais
            $table->integer('quantidade'); // Quantidade do produto em estoque
            $table->foreignId('categoria_id') // Chave estrangeira para 'categoria_id'
                  ->constrained() // Relacionamento com a tabela 'categorias'
                  ->onDelete('cascade'); // Se uma categoria for deletada, os produtos relacionados também serão deletados
            $table->timestamps(); // Colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos'); // Deleta a tabela 'produtos'
    }
};
