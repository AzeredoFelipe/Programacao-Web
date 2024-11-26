<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Total de clientes
        $totalClientes = Cliente::count();
    
        // Total de produtos
        $totalProdutos = \App\Models\Produto::count();
    
        // Total de vendas por cliente
        $vendasPorCliente = Venda::selectRaw('cliente_id, SUM(valor_total) as total_vendas')
            ->groupBy('cliente_id')
            ->with('cliente') // Carregar o relacionamento com o cliente
            ->get();
    
        // Todas as vendas
        $vendas = Venda::with('cliente')->get();
    
        return view('dashboard', compact('totalClientes', 'totalProdutos', 'vendasPorCliente', 'vendas'));
    }
}