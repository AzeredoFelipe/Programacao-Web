<x-app-layout>

    <h5>Excluir Cliente</h5>

    <form action="/cliente/{{$cliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do cliente:</label>
                <input type="text" name="nome" class="form-control" 
                    value="{{ $cliente->nome }}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
    </form>

</x-app-layout>
