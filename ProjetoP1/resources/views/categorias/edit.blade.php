<x-app-layout>
    <div class="container mt-5">
        <h5>Editar Categoria</h5>

        <form action="/categoria/{{ $categoria->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nome da Categoria -->
            <div class="row">
                <div class="col">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $categoria->nome }}" required>
                </div>
            </div>

            <!-- Descrição -->
            <div class="row mt-3">
                <div class="col">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ $categoria->descricao }}</textarea>
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
