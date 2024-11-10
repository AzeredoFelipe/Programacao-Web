<x-app-layout>
    <h5 class="mt-3">Gerenciar Categorias</h5>

    <a class="btn btn-success" href="/categoria/create">
        Inserir nova Categoria
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td>
                        <a href="/categoria/{{ $categoria->id }}/edit" class="btn btn-warning">Alterar</a>
                        <a href="/categoria/{{ $categoria->id }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
