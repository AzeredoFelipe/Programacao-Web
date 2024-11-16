<!-- resources/views/produtos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Produtos</h1>
        <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Produto</a>
        
        <table class="table">
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
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
