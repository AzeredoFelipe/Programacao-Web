@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h5>Cadastrar Cliente</h5>

        <form action="/clientes" method="POST">
            @csrf

            <!-- Nome Fantasia -->
            <div class="mb-3">
                <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" required>
            </div>

            <!-- Razão Social -->
            <div class="mb-3">
                <label for="razao_social" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="razao_social" name="razao_social" required>
            </div>

            <!-- Telefone -->
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>

            <!-- CNPJ -->
            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" required>
            </div>

            <!-- Endereço -->
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>

            <!-- Cidade -->
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>

            <!-- Estado -->
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
            </div>

            <!-- Botão de Cadastro -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
            </div>
        </form>

        <!-- Botão Voltar -->
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
