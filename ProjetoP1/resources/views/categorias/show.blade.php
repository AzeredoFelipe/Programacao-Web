<x-app-layout>

    <h5>Excluir Categoria</h5>

    <form action="/categoria/{{ $categoria->id }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome da Categoria:</label>
                <input type="text" name="nome" class="form-control" 
                    value="{{ $categoria->nome }}" disabled/>
            </div>
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" 
                    value="{{ $categoria->descricao }}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
    </form>

</x-app-layout>
