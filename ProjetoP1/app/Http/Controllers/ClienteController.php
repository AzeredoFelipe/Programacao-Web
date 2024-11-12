<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Buscar todos os clientes
        $clientes = Cliente::all(); // Não há necessidade de condições aqui

        // Verifique se a variável $clientes está chegando corretamente à view
        return view('clientes.index', compact('clientes')); // Passa os clientes para a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create'); // Exibe o formulário para criar um novo cliente
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação básica (adapte conforme necessário)
        $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|unique:clientes,cnpj',
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        // Cria o novo cliente
        Cliente::create($request->all());

        // Redireciona para a lista de clientes
        return redirect("/clientes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id); // Encontra ou falha ao encontrar o cliente
        return view('clientes.show', compact('cliente')); // Exibe os detalhes do cliente
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id); // Encontra o cliente ou falha
        return view('clientes.edit', compact('cliente')); // Exibe o formulário de edição
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id); // Encontra o cliente ou falha ao encontrá-lo

        // Validação básica (adapte conforme necessário)
        $request->validate([
            'nome_fantasia' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|unique:clientes,cnpj,' . $id,
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        // Atualiza os dados do cliente
        $cliente->update($request->all());

        // Redireciona para a lista de clientes
        return redirect("/clientes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id); // Encontra o cliente ou falha

        // Deleta o cliente
        $cliente->delete();

        // Redireciona para a lista de clientes
        return redirect("/clientes");
    }
}
