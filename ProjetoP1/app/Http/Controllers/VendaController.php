<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    // Exibe o formulário para criar uma nova venda associada a um cliente específico
    public function create($cliente_id)
    {
        // Verifica se o cliente existe
        $cliente = Cliente::findOrFail($cliente_id);

        // Retorna a view para criar a venda
        return view('vendas.create', compact('cliente'));
    }

    // Armazena os dados da venda no banco de dados
    public function store(Request $request)
    {
        // Valida os dados da venda
        $request->validate([
            'valor' => 'required|numeric|min:0.01', // Validar o valor da venda
        ]);

        // Cria a venda associada ao cliente
        Venda::create([
            'cliente_id' => $request->cliente_id, // ID do cliente
            'valor' => $request->valor, // Valor da venda
        ]);

        // Redireciona o usuário de volta para o dashboard
        return redirect()->route('dashboard');
    }
}
