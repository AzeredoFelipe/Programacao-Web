@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>

    <form action="/cliente/{{$cliente->id}} method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class = "col">
            <label for="nome" class="form-label">Informe o Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
                value="{{ $cliente->nome}}"/>
        </div>
        <!-- Adicione outros campos conforme necessário -->
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
