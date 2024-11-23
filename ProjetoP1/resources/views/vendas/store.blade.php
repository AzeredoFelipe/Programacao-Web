@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h5>Cadastrar Venda</h5>

        <form action="{{ route('vendas.store') }}" method="POST">
            @csrf

            <!-- Cliente -->
            <div class="mb-3">
                <label for="cliente_id" class="form-label">Cliente</label>
                <select class="form-control" id="cliente_id" name="cliente_id" required>
                    <option value="">Selecione o Cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Produto -->
            <div class="mb-3">
                <label for="produto" class="form-label">Produto</label>
                <input type="text" class="form-control" id="produto" name="produto" required>
            </div>

            <!-- Quantidade -->
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            </div>

            <!-- Preço -->
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco" name="preco" required>
            </div>

            <!-- Botão de Cadastro -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Cadastrar Venda</button>
            </div>
        </form>

        <!-- Botão Voltar -->
        <a href="{{ route('vendas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
