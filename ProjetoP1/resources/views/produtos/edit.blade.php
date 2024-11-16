<!-- resources/views/produtos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Produto</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" value="{{ $produto->marca }}" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $produto->quantidade }}" required>
            </div>

            <button type="submit" class="btn btn-warning mt-3">Atualizar Produto</button>
        </form>
    </div>
@endsection
