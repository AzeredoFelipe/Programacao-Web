<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
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
        // Validação dos campos
        $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'telefone'      => 'required|string|max:20',
            'cnpj'          => 'required|string|max:14',
            'endereco'      => 'required|string|max:255',
        ]);

        // Armazena o cliente com todos os campos
        Cliente::create($request->all());

        return redirect()->route('clientes.index');
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
        // Validação dos campos
        $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social'  => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'telefone'      => 'required|string|max:20',
            'cnpj'          => 'required|string|max:14',
            'endereco'      => 'required|string|max:255',
            'cidade'        => 'nullable|string|max:255',
            'estado'        => 'nullable|string|max:255',
        ]);

        // Atualiza o cliente com os novos dados
        $cliente->update($request->all());

        return redirect()->route('clientes.index'); // Redireciona para a lista de clientes
    }

    public function destroy(Cliente $cliente)
    {
        // Exclui o cliente
        $cliente->delete(); 
        return redirect()->route('clientes.index'); // Redireciona para a lista de clientes
    }
}
