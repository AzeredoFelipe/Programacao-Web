@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Dashboard</h2>

        <!-- Informações Gerais -->
        <div class="row">
            <!-- Total de Clientes -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center bg-primary text-white">
                        <h5 class="card-title"><i class="fas fa-users"></i> Total de Clientes</h5>
                        <p class="card-text fs-4">{{ $totalClientes }}</p>
                    </div>
                </div>
            </div>

            <!-- Total de Produtos -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center bg-success text-white">
                        <h5 class="card-title"><i class="fas fa-cogs"></i> Total de Produtos</h5>
                        <p class="card-text fs-4">{{ $totalProdutos }}</p>
                    </div>
                </div>
            </div>

            <!-- Total de Vendas por Cliente -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center bg-warning text-dark">
                        <h5 class="card-title"><i class="fas fa-chart-line"></i> Vendas por Cliente</h5>
                        @foreach ($vendasPorCliente as $venda)
                            <p class="card-text">
                                <strong>{{ $venda->cliente->nome_fantasia }}</strong><br>
                                Total de Vendas: <span class="fw-bold">R$ {{ number_format($venda->total_vendas, 2, ',', '.') }}</span>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabela de Vendas -->
        <h4 class="mt-4 mb-3">Vendas Realizadas</h4>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Total</th>
                    <th>Data da Venda</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{ $venda->id }}</td>
                        <td>{{ $venda->cliente->nome_fantasia }}</td>
                        <td>{{ $venda->produto->nome }}</td>
                        <td>{{ $venda->quantidade }}</td>
                        <td>R$ {{ number_format($venda->preco_unitario, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($venda->valor_total, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($venda->data_venda)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection




