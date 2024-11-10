<x-app-layout>
    <div class="container mt-5">
        <h5>Cadastrar Categoria</h5>

        <!-- Exibição de Erros -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário -->
        <form action="{{ route('categoria.store') }}" method="POST">
            @csrf

            <!-- Nome da Categoria -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome da Categoria</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <!-- Descrição -->
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
            </div>

            <!-- Botão de Cadastro -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Cadastrar Categoria</button>
            </div>
        </form>

        <!-- Botão Voltar -->
        <a href="{{ route('categoria.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</x-app-layout>
