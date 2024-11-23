<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;

class DashboardController extends Controller
{
    public function index()
    {
        // Pegando o total de clientes e produtos
        $totalClientes = Cliente::count();
        $totalProdutos = Produto::count();

        // Pegando todas as vendas registradas
        $vendas = Venda::with('cliente')->get();

        return view('dashboard', compact('totalClientes', 'totalProdutos', 'vendas'));
    }
}
