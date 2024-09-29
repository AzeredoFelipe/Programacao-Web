<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo de Velocidade Média</h1>
                <p class="text-center">Insira a distância e o tempo para calcular a velocidade média.</p>

                <form action="/respostaEx20" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="distancia" class="form-label">Distância</label>
                        <input type="number" name="distancia" class="form-control" placeholder="Insira a distância" required>
                    </div>

                    <div class="mb-3">
                        <label for="tempo" class="form-label">Tempo</label>
                        <input type="number" name="tempo" class="form-control" placeholder="Insira o tempo" required>
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
