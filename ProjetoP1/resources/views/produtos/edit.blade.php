@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h5>Editar Produto</h5>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nome do Produto -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $produto->nome) }}" required>
            </div>

            <!-- Marca -->
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $produto->marca) }}" required>
            </div>

            <!-- Preço -->
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco" name="preco" value="{{ old('preco', $produto->preco) }}" required>
            </div>

            <!-- Quantidade -->
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ old('quantidade', $produto->quantidade) }}" required>
            </div>

            <!-- Botão de Atualização -->
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Atualizar Produto</button>
            </div>
        </form>

        <!-- Botão Voltar -->
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
