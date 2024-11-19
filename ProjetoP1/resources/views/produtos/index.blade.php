@extends('layouts.app')

@section('content')
    <div class="container">
        <h5 class="mt-3">Gerenciar Produtos</h5>

        <!-- Link para cadastrar novo produto -->
        <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Produto</a>
        
        <!-- Tabela de Produtos -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->marca }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>
                            <!-- Link para editar o produto -->
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Formulário para excluir o produto -->
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
@endsection
