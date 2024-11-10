<x-app-layout>
    <div class="container mt-5">
        <h5>Editar Produto</h5>

        <form action="/produto/{{ $produto->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nome do Produto -->
            <div class="row">
                <div class="col">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" required>
                </div>
            </div>

            <!-- Descrição -->
            <div class="row mt-3">
                <div class="col">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ $produto->descricao }}</textarea>
                </div>
            </div>

            <!-- Preço -->
            <div class="row mt-3">
                <div class="col">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="number" class="form-control" id="preco" name="preco" step="0.01" value="{{ $produto->preco }}" required>
                </div>
            </div>

            <!-- Botão de Atualizar -->
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
