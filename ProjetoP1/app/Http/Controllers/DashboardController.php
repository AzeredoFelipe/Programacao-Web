<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;

class DashboardController extends Controller
{
    public function gerarGrafico()
    {
        // Total de clientes cadastrados
        $totalClientes = Cliente::count();
        
        // Total de produtos cadastrados
        $totalProdutos = Produto::count();

        // Retornar os dados para a view do dashboard
        return view('dashboard', compact(
            'totalClientes', 
            'totalProdutos'
        ));
    }
}
