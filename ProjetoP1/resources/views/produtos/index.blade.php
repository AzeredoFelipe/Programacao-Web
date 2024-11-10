<x-app-layout>
    <h5 class="mt-3">Gerenciar Produtos</h5>

    <a class="btn btn-success" href="/produto/create">
        Inserir novo Produto
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>
                        <a href="/produto/{{ $produto->id }}/edit" class="btn btn-warning">Alterar</a>
                        <a href="/produto/{{ $produto->id }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
