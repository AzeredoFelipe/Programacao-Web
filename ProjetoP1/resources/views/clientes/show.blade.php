@extends('layouts.app')

@section('content')
    <h5 class="mt-3">Detalhes do Cliente</h5>

    <table class="table table-bordered">
        <tr>
            <th>Nome Fantasia</th>
            <td>{{ $cliente->nome_fantasia }}</td>
        </tr>
        <tr>
            <th>Razão Social</th>
            <td>{{ $cliente->razao_social }}</td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td>{{ $cliente->telefone }}</td>
        </tr>
        <tr>
            <th>CNPJ</th>
            <td>{{ $cliente->cnpj }}</td>
        </tr>
        <tr>
            <th>Endereço</th>
            <td>{{ $cliente->endereco }}</td>
        </tr>
        <tr>
            <th>Cidade</th>
            <td>{{ $cliente->cidade }}</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>{{ $cliente->estado }}</td>
        </tr>
    </table>

    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
