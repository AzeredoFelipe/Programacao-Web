


@extends('layouts.app')

@section('content')
    <h1>Detalhes do Cliente</h1>
    <p><strong>ID:</strong> {{ $cliente->id }}</p>
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>

    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
