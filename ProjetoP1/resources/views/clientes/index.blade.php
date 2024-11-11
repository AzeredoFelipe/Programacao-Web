<x-app-layout>

    <h5 class="mt-3">Gerenciar Clientes</h5>

    <a class="btn btn-success" href="/clientes/create">
        Inserir novo Cliente
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>
                        <a href="/cliente/{{ $cliente->id }}/edit" class="btn btn-warning">Alterar</a>
                        <a href="/cliente/{{ $cliente->id }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
