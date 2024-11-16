<!-- resources/views/produtos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Produto</h1>

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Cadastrar Produto</button>
        </form>
    </div>
@endsection
