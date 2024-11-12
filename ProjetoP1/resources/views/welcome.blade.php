<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Bem-vindo ao Sistema de Gestão</h1>
                <div class="card mt-4">
                    <div class="card-body">
                        <h2 class="card-title">Gerenciar</h2>
                        <ul class="list-group">
                            <!-- Link para Gerenciar Clientes -->
                            <li class="list-group-item">
                                <a href="{{ route('clientes.index') }}" class="btn btn-primary w-100">Gerenciar Clientes</a>
                            </li>
                            <!-- Link para Gerenciar Produtos -->
                            <li class="list-group-item">
                                <a href="{{ route('produtos.index') }}" class="btn btn-success w-100">Gerenciar Produtos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
