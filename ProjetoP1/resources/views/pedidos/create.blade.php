<x-app-layout>
    <div class="container mt-5">
        <h5>Cadastrar Pedido</h5>

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
        <form action="{{ route('pedido.store') }}" method="POST">
            @csrf

            <!-- Cliente ID -->
            <div class="mb-3">
                <label for="cliente_id" class="form-label">Cliente ID</label>
                <input type="text" class="form-control" id="cliente_id" name="cliente_id" required>
            </div>

            <!-- Data do Pedido -->
            <div class="mb-3">
                <label for="data_pedido" class="form-label">Data do Pedido</label>
                <input type="date" class="form-control" id="data_pedido" name="data_pedido" required>
            </div>

            <!-- Valor Total -->
            <div class="mb-3">
                <label for="valor_total" class="form-label">Valor Total</label>
                <input type="number" class="form-control" id="valor_total" name="valor_total" required>
            </div>

            <!-- Botão de Cadastro -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Cadastrar Pedido</button>
            </div>
        </form>

        <!-- Botão Voltar -->
        <a href="{{ route('pedido.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
</x-app-layout>
