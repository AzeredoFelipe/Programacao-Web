@extends('layouts.app')

@section('content')
    <h5 class="mt-3">Detalhes do Produto</h5>

    <table class="table table-bordered">
        <tr>
            <th>Nome do Produto</th>
            <td>{{ $produto->nome }}</td>
        </tr>
        <tr>
            <th>Marca</th>
            <td>{{ $produto->descricao }}</td>
        </tr>
        <tr>
            <th>Preço</th>
            <td>{{ number_format($produto->preco, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Quantidade</th>
            <td>{{ $produto->quantidade }}</td>
        </tr>
    </table>

    <!-- Botão de Exclusão -->
    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            Excluir Produto
        </button>
    </form>

    <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
