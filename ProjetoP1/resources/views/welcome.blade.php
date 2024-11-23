<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Título Principal -->
                <h1 class="text-center mb-4">Bem-vindo ao Sistema de Gestão</h1>

                <!-- Card Principal -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h2 class="card-title">Ações Principais</h2>
                        <ul class="list-group">
                            <!-- Link para Gerenciar Clientes -->
                            <li class="list-group-item">
                                <a href="{{ route('clientes.index') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-users"></i> Gerenciar Clientes
                                </a>
                            </li>
                            <!-- Link para Gerenciar Produtos -->
                            <li class="list-group-item">
                                <a href="{{ route('produtos.index') }}" class="btn btn-success w-100">
                                    <i class="fas fa-box"></i> Gerenciar Produtos
                                </a>
                            </li>
                            <!-- Alterado para Link de "Criar Venda" -->
                            <li class="list-group-item">
                                <a href="{{ route('vendas.create', ['cliente_id' => 1]) }}" class="btn btn-warning w-100">
                                    <i class="fas fa-cart-plus"></i> Criar Venda
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Botão para Cadastrar Nova Venda -->
                <div class="text-center mt-4">
                    <a href="{{ route('vendas.create', ['cliente_id' => 1]) }}" class="btn btn-danger btn-lg">
                        <i class="fas fa-cart-arrow-down"></i> Registrar Nova Venda
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
