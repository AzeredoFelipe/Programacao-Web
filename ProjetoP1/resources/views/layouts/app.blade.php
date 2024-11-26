<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome (Ícones) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        
    <!-- Custom Styles -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            padding-bottom: 100px; /* Espaço para o rodapé fixo */
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* Cor do rodapé */
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Minha Aplicação</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Clientes -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('clientes.index') }}"><i class="fas fa-users"></i> Clientes</a>
                    </li>
                    <!-- Produtos -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produtos.index') }}"><i class="fas fa-box"></i> Produtos</a>
                    </li>
                    <!-- Vendas -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendas.create', ['cliente_id' => 1]) }}"><i class="fas fa-cart-plus"></i> Vendas</a>
                    </li>
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <!-- Perfil -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}"><i class="fas fa-user"></i> Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-4">
        @yield('content')  <!-- Exibe o conteúdo da página -->
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Vendasync. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
