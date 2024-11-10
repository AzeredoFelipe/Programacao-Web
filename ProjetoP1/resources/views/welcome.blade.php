<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Sistema de Vendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa; /* Cor de fundo suave, mais simples */
            height: 100vh;
            margin: 0;
        }

        .card {
            border-radius: 1rem; /* Borda arredondada para o card */
        }

        .card-body {
            padding: 2rem; /* Padding mais espaçoso dentro do card */
        }

        .btn {
            width: 100%; /* Botões ocupam a largura total do card */
            margin-bottom: 0.5rem; /* Espaçamento entre botões */
        }

        .card-title {
            margin-bottom: 1.5rem; /* Espaçamento abaixo do título do card */
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center">Bem-vindo ao Sistema de Vendas!</h5>
                <p class="text-center">Cadastre seus clientes e gerencie suas vendas de forma eficiente.</p>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Listar Clientes</a>
                <a href="{{ route('clientes.create') }}" class="btn btn-success">Cadastrar Cliente</a>
            </div>
        </div>
    </div>
</div>

<footer class="text-center mt-5" style="position: absolute; bottom: 10px; width: 100%;">
    <p>&copy; {{ date('Y') }} Sistema de Vendas. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
