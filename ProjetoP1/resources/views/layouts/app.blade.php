<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>@yield('title')</title>
    <style>
        body {
            background-color: #f0f2f5;
        }

        #sidebar {
            min-height: 100vh;
            background-color: #b20000;
        }

        #sidebar .nav-link {
            color: white;
            transition: background-color 0.3s;
            padding: 15px 20px;
        }

        #sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        #sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.3);
            font-weight: bold;
        }

        main {
            padding: 2rem;
            flex-grow: 1;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logout-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: auto;
            text-align: center;
        }

        .navbar {
            background-color: #b20000;
            border: none;
        }

        .navbar .nav-link {
            color: white;
            margin-right: 20px;
        }

        .navbar-toggler-icon {
            background-image: none;
            color: white;
            border: 1px solid white;
            width: 30px;
            height: 30px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .dropdown-menu {
            background-color: #b20000;
            border: none;
        }

        .dropdown-item {
            color: white;
        }

        .collapse {
            background-color: #b20000;
            border: none;
        }

        .submenu .nav-link {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="vagaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-briefcase"></i> Vagas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="vagaDropdown">
                        <a class="dropdown-item" href="{{ url('/vagas/create') }}">Cadastrar Vaga</a>
                        <a class="dropdown-item" href="{{ url('/vagas') }}">Listar Vagas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cidadeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-map-marker-alt"></i> Cidades
                    </a>
                    <div class="dropdown-menu" aria-labelledby="cidadeDropdown">
                        <a class="dropdown-item" href="{{ url('/cidades/create') }}">Cadastrar Cidade</a>
                        <a class="dropdown-item" href="{{ url('/cidades') }}">Listar Cidades</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/') }}">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link submenu" data-toggle="collapse" href="#vagaMenu" role="button" aria-expanded="false" aria-controls="vagaMenu">
                                <i class="fas fa-briefcase"></i> Vagas
                                <i class="fas fa-angle-down submenu-icon"></i>
                            </a>
                            <div class="collapse" id="vagaMenu">
                                <ul class="nav flex-column submenu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/vagas/create') }}">
                                            Cadastrar Vaga
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/vagas') }}">
                                            Listar Vagas
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link submenu" data-toggle="collapse" href="#cidadeMenu" role="button" aria-expanded="false" aria-controls="cidadeMenu">
                                <i class="fas fa-map-marker-alt"></i> Cidades
                                <i class="fas fa-angle-down submenu-icon"></i>
                            </a>
                            <div class="collapse" id="cidadeMenu">
                                <ul class="nav flex-column submenu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/cidades/create') }}">
                                            Cadastrar Cidade
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/cidades') }}">
                                            Listar Cidades
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="logout-button">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link text-white">
                                <i class="fas fa-sign-out-alt"></i> Sair
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                {{$slot}}
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
