<x-app-layout>
    <div class="container mt-5">
        <h5>Editar Pedido</h5>

        <form action="/pedido/{{ $pedido->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Cliente ID -->
            <div class="row">
                <div class="col">
                    <label for="cliente_id" class="form-label">Cliente ID</label>
                    <input type="text" class="form-control" id="cliente_id" name="cliente_id" value="{{ $pedido->cliente_id }}" required>
                </div>
            </div>

            <!-- Data do Pedido -->
            <div class="row mt-3">
                <div class="col">
                    <label for="data_pedido" class="form-label">Data do Pedido</label>
                    <input type="date" class="form-control" id="data_pedido" name="data_pedido" value="{{ $pedido->data_pedido }}" required>
                </div>
            </div>

            <!-- Valor Total -->
            <div class="row mt-3">
                <div class="col">
                    <label for="valor_total" class="form-label">Valor Total</label>
                    <input type="number" class="form-control" id="valor_total" name="valor_total" value="{{ $pedido->valor_total }}" required>
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
