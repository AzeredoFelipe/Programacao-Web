@extends('layouts.app')

@section('content')

    <h5 class="mt-3">Gerenciar Clientes</h5>

    <!-- Link para cadastrar novo cliente -->
    <a class="btn btn-success mb-3" href="{{ route('clientes.create') }}">
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
            <!-- Verifica se existem clientes -->
            @if($clientes->isEmpty())
                <tr>
                    <td colspan="2">Nenhum cliente cadastrado.</td>
                </tr>
            @else
                <!-- Loop para exibir clientes -->
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome_fantasia }}</td> <!-- Exibe o nome do cliente -->
                        <td>
                            <!-- Link para editar o cliente -->
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Alterar</a>

                            <!-- Formulário para excluir cliente -->
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
