@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h5>Cadastrar Venda</h5>

        <!-- Formulário para cadastrar a venda -->
        <form action="{{ route('vendas.store') }}" method="POST">
            @csrf

            <!-- Seleção de Cliente -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select name="cliente_id" id="cliente" class="form-control" required>
                    <option value="">Selecione o Cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome_fantasia }} - {{ $cliente->razao_social }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Campo Produto -->
            <div class="mb-3">
                <label for="produto_id" class="form-label">Produto</label>
                <select name="produto_id" id="produto_id" class="form-control" required>
                    <option value="">Selecione o Produto</option>
                    @foreach($produtos as $produto)
                        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Quantidade -->
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
            </div>

            <!-- Preço Unitário -->
            <div class="mb-3">
                <label for="preco_unitario" class="form-label">Preço Unitário</label>
                <input type="text" class="form-control" id="preco_unitario" name="preco_unitario" required>
            </div>

            <!-- Botão para enviar o formulário -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Cadastrar Venda</button>
            </div>
        </form>

        <!-- Botão Voltar -->
        <a href="{{ route('vendas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
