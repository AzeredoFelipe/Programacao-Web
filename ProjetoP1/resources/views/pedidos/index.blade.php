<x-app-layout>
    <h5 class="mt-3">Gerenciar Pedidos</h5>

    <a class="btn btn-success" href="/pedido/create">
        Inserir novo Pedido
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Cliente ID</th>
                <th>Data do Pedido</th>
                <th>Valor Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->cliente_id }}</td>
                    <td>{{ $pedido->data_pedido }}</td>
                    <td>{{ $pedido->valor_total }}</td>
                    <td>
                        <a href="/pedido/{{ $pedido->id }}/edit" class="btn btn-warning">Alterar</a>
                        <a href="/pedido/{{ $pedido->id }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
