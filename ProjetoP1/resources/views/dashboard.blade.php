<x-app-layout>
    <div class="container mt-4">
        <h1 class="text-center">Dashboard</h1>

        <!-- Botão para adicionar novo cliente ou produto -->
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

        <!-- Exemplo de Tabela para produtos -->
        <div class="mt-5">
            <h5>Produtos Cadastrados</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning btn-sm">Alterar</a>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
