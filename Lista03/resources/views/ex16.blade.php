<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo de Desconto</h1>
                <p class="text-center">Insira o preço e o percentual de desconto para calcular o preço final.</p>

                <form action="/respostaEx16" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" name="preco" class="form-control" placeholder="Insira o preço" required>
                    </div>

                    <div class="mb-3">
                        <label for="desconto" class="form-label">Desconto (%)</label>
                        <input type="number" name="desconto" class="form-control" placeholder="Insira o desconto" required>
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
