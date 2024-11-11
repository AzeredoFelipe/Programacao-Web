<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema de Gestão de Vendas</title>
    <!-- Inclua aqui os links para CSS e frameworks de front-end, como Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Cabeçalho -->
        <header class="text-center mb-5">
            <h1 class="display-4">Sistema de Gestão de Clientes e Pedidos</h1>
            <p class="lead">Bem-vindo! Navegue e gerencie informações com facilidade.</p>
        </header>

        <!-- Ações principais para navegação -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gerenciar Clientes</h5>
                        <p class="card-text">Acesse a lista de clientes e realize operações de gerenciamento.</p>
                        <!-- Corrigido para utilizar a rota correta -->
                        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Ver Clientes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Painel de Controle</h5>
                        <p class="card-text">Acesse o painel de controle para ver análises e relatórios.</p>
                        <!-- Corrigido para utilizar a rota correta -->
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Ir para Dashboard</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção de Login ou Registro (caso o usuário não esteja autenticado) -->
        <div class="text-center mt-4">
            @if (Route::has('login'))
                <div>
                    @auth
                        <!-- Ajuste para a verificação de login e painel -->
                        <a href="{{ url('/dashboard') }}" class="btn btn-success mt-3">Painel de Controle</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mt-3">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-info mt-3 ml-2">Registrar-se</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    <!-- Scripts do Bootstrap (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
