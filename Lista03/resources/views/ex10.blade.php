<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo do Perímetro do Retângulo</h1>
                <p class="text-center">Insira a largura e a altura do retângulo para calcular o perímetro.</p>

                <form action="/respostaEx10" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="largura" class="form-label">Largura</label>
                        <input type="number" name="largura" class="form-control" placeholder="Insira a largura" required>
                    </div>

                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura</label>
                        <input type="number" name="altura" class="form-control" placeholder="Insira a altura" required>
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
