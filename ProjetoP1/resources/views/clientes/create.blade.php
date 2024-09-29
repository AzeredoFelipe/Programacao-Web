@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <!-- Adicione outros campos conforme necessário -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
