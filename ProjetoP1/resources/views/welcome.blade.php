<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('{{ asset("build/assets/img/background-home.png") }}');
            background-size: cover;
            background-position: center;
            color: white;
            height: 100vh;
            margin: 0;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .btn {
            width: 200px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="content">
            <h1>Bem-vindo ao SIVA!</h1>
            <p>Acesse sua conta ou crie uma nova para acessar as vagas disponíveis.</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Entrar</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg">Cadastro</a>
        </div>
    </div>

    <footer class="text-center mt-5" style="position: absolute; bottom: 10px; width: 100%;">
        <p>&copy; {{ date('Y') }} SIVA. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
