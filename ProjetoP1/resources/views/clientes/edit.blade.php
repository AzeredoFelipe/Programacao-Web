<x-app-layout>
    <h5 class="mt-3">Editar Cliente</h5>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- O método PUT é necessário para atualização -->

        <div class="mb-3">
            <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
            <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" value="{{ old('nome_fantasia', $cliente->nome_fantasia) }}" required>
        </div>

        <div class="mb-3">
            <label for="razao_social" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="razao_social" name="razao_social" value="{{ old('razao_social', $cliente->razao_social) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $cliente->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $cliente->telefone) }}" required>
        </div>

        <div class="mb-3">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ old('cnpj', $cliente->cnpj) }}" required>
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('endereco', $cliente->endereco) }}" required>
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade', $cliente->cidade) }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $cliente->estado) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Cliente</button>
    </form>
</x-app-layout>
