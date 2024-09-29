<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Subtrator de Números</h1>
                <p class="text-center">Insira dois números para calcular a subtração.</p>

                <form action="/respostaEx02" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="val01" class="form-label">Valor 01</label>
                        <input type="number" name="val01" class="form-control" placeholder="Insira o primeiro número" required>
                    </div>

                    <div class="mb-3">
                        <label for="val02" class="form-label">Valor 02</label>
                        <input type="number" name="val02" class="form-control" placeholder="Insira o segundo número" required>
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
