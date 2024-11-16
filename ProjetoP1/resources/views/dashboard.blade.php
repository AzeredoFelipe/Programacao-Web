<x-app-layout>
    <div class="container mt-4">
        <h1 class="text-center">Dashboard</h1>
        
        <div class="row mt-5">
            <!-- Total de Clientes -->
            <div class="col-md-6">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Total de Clientes</div>
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $totalClientes }}</h3>
                    </div>
                </div>
            </div>
            
            <!-- Total de Produtos -->
            <div class="col-md-6">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Total de Produtos</div>
                    <div class="card-body">
                        <h3 class="card-title text-center">{{ $totalProdutos }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
