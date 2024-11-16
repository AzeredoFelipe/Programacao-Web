<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|string|max:14|unique:clientes,cnpj',
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|string|max:14|unique:clientes,cnpj,' . $id,
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
