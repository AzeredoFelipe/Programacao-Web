<x-app-layout>

    <h5>Excluir Produto</h5>

    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <!-- Nome do Produto -->
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" name="nome" class="form-control" 
                    value="{{ $produto->nome }}" disabled/>
            </div>
        </div>

        <!-- Descrição do Produto -->
        <div class="row mt-3">
            <div class="col">
                <label for="descricao" class="form-label">Marca:</label>
                <input type="text" name="descricao" class="form-control" 
                    value="{{ $produto->descricao }}" disabled/>
            </div>
        </div>

        <!-- Preço do Produto -->
        <div class="row mt-3">
            <div class="col">
                <label for="preco" class="form-label">Preço:</label>
                <input type="text" name="preco" class="form-control" 
                    value="{{ number_format($produto->preco, 2, ',', '.') }}" disabled/>
            </div>
        </div>

        <!-- Botão de Exclusão -->
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
    </form>

</x-app-layout>
