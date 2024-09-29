<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo de Potência</h1>
                <p class="text-center">Insira uma base e um expoente para calcular a potência.</p>

                <form action="/respostaEx12" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="base" class="form-label">Base</label>
                        <input type="number" name="base" class="form-control" placeholder="Insira a base" required>
                    </div>

                    <div class="mb-3">
                        <label for="expoente" class="form-label">Expoente</label>
                        <input type="number" name="expoente" class="form-control" placeholder="Insira o expoente" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>