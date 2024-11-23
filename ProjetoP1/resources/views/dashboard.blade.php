<x-app-layout>
    <div class="container mt-4">
        <h1 class="text-center">Dashboard</h1>

        <!-- Botões para adicionar novos itens -->
        <div class="text-center mb-4">
            <a href="{{ route('clientes.create') }}" class="btn btn-success">Inserir Novo Cliente</a>
            <a href="{{ route('produtos.create') }}" class="btn btn-primary">Inserir Novo Produto</a>
        </div>

        <div class="row mt-5">
            <!-- Total de Clientes -->
            <div class="col-md-6">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total de Clientes</div>
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $totalClientes }}</h3>
                    </div>
                </div>
            </div>

            <!-- Total de Produtos -->
            <div class="col-md-6">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total de Produtos</div>
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $totalProdutos }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendas -->
        <div class="mt-5">
            <h5>Vendas Realizadas</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendas as $venda)
                        <tr>
                            <td>{{ $venda->cliente->nome }}</td>
                            <td>{{ $venda->valor }}</td>
                            <td>{{ $venda->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('vendas.create', $venda->cliente->id) }}" class="btn btn-info btn-sm">Nova Venda</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
