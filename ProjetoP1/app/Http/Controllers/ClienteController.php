<?php

namespace App\Http\Controllers;

use App\Models\Cliente; // Certifique-se de que você importou o modelo Cliente
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all(); // Lista todos os clientes
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create'); // Exibe o formulário para criar um novo cliente
    }

    public function store(Request $request)
    {
        // Valida e armazena o novo cliente
        $request->validate([
            'nome' => 'required|string|max:255',
            // adicione outras validações conforme necessário
        ]);

        Cliente::create($request->all()); // Armazena o cliente

        return redirect()->route('clientes.index'); // Redireciona para a lista de clientes
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente')); // Exibe os detalhes do cliente
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente')); // Exibe o formulário para editar o cliente
    }

    public function update(Request $request, Cliente $cliente)
    {
        // Valida e atualiza o cliente
        $request->validate([
            'nome' => 'required|string|max:255',
            // adicione outras validações conforme necessário
        ]);

        $cliente->update($request->all()); // Atualiza o cliente

        return redirect()->route('clientes.index'); // Redireciona para a lista de clientes
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete(); // Exclui o cliente
        return redirect()->route('clientes.index'); // Redireciona para a lista de clientes
    }
}
