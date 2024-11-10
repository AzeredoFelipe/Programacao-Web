<x-app-layout>

    <h5>Excluir Pedido</h5>

    <form action="/pedido/{{ $pedido->id }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="cliente_id" class="form-label">ID do Cliente:</label>
                <input type="text" name="cliente_id" class="form-control" 
                    value="{{ $pedido->cliente_id }}" disabled/>
            </div>
            <div class="col">
                <label for="data_pedido" class="form-label">Data do Pedido:</label>
                <input type="text" name="data_pedido" class="form-control" 
                    value="{{ $pedido->data_pedido }}" disabled/>
            </div>
            <div class="col">
                <label for="valor_total" class="form-label">Valor Total:</label>
                <input type="text" name="valor_total" class="form-control" 
                    value="{{ $pedido->valor_total }}" disabled/>
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
