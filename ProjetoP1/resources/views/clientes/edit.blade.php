<x-app-layout>
    <div class="container mt-5">
        <h5>Editar Cliente</h5>

        <form action="/clientes/{{ $cliente->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nome -->
            <div class="row">
                <div class="col">
                    <label for="nome" class="form-label">Informe o Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
                </div>
            </div>

            <!-- Outros campos adicionais podem ser incluídos aqui -->
            
            <!-- Botão de Atualizar -->
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
