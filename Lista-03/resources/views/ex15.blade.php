<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo do IMC</h1>
                <p class="text-center">Insira seu peso e altura para calcular o IMC (peso / altura²).</p>

                <form action="/respostaEx15" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso (kg)</label>
                        <input type="number" name="peso" class="form-control" placeholder="Insira seu peso" required>
                    </div>

                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura (m)</label>
                        <input type="number" name="altura" class="form-control" placeholder="Insira sua altura" required>
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
