<x-app-layout>

    <h5 class="mt-3">Gerenciar Clientes</h5>

    <!-- Link para cadastrar novo cliente -->
    <a class="btn btn-success" href="{{ route('clientes.create') }}">
        Inserir novo Cliente
    </a>

    <!-- Tabela de Clientes -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop para exibir clientes -->
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome_fantasia }}</td> <!-- Nome do Cliente -->
                    <td>
                        <!-- Link para editar o cliente -->
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Alterar</a>

                        <!-- Formulário para excluir cliente -->
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
