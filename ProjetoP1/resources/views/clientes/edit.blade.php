@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
        </div>
        <!-- Adicione outros campos conforme necessário -->
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
