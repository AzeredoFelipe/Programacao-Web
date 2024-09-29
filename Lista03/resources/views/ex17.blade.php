<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo de Juros Simples</h1>
                <p class="text-center">Insira o capital, a taxa de juros e o período para calcular os juros simples.</p>

                <form action="/respostaEx17" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="capital" class="form-label">Capital</label>
                        <input type="number" name="capital" class="form-control" placeholder="Insira o capital" required>
                    </div>

                    <div class="mb-3">
                        <label for="taxa" class="form-label">Taxa (%)</label>
                        <input type="number" name="taxa" class="form-control" placeholder="Insira a taxa de juros" required>
                    </div>

                    <div class="mb-3">
                        <label for="periodo" class="form-label">Período (anos)</label>
                        <input type="number" name="periodo" class="form-control" placeholder="Insira o período" required>
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
