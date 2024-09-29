<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Conversão de Dias</h1>
                <p class="text-center">Insira um valor em dias para converter para horas, minutos e segundos.</p>

                <form action="/respostaEx19" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="dias" class="form-label">Dias</label>
                        <input type="number" name="dias" class="form-control" placeholder="Insira o número de dias" required>
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
