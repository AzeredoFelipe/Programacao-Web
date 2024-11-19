<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all(); // Retorna todos os clientes
        return view('clientes.index', compact('clientes')); // Passa os dados para a view
    }
   

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|string|max:14|unique:clientes,cnpj',
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        // Criação do cliente com validação de campos específicos
        Cliente::create([
            'nome_fantasia' => $request->nome_fantasia,
            'razao_social' => $request->razao_social,
            'telefone' => $request->telefone,
            'cnpj' => $request->cnpj,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);

        // Redireciona de volta para a lista de clientes com mensagem de sucesso
        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        // Validação
        $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|string|max:14|unique:clientes,cnpj,' . $id,
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        // Encontrar o cliente e atualizar os dados
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nome_fantasia' => $request->nome_fantasia,
            'razao_social' => $request->razao_social,
            'telefone' => $request->telefone,
            'cnpj' => $request->cnpj,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);

        // Redireciona de volta para a lista de clientes com mensagem de sucesso
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Encontrar o cliente e deletar
        $cliente = Cliente::findOrFail($id);

        // Autorização para exclusão (caso necessário)
        // $this->authorize('delete', $cliente);

        $cliente->delete();

        // Redireciona para a lista de clientes com mensagem de sucesso
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
