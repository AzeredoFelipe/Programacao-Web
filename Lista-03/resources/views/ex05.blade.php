<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Cálculo da Média</h1>
                <p class="text-center">Insira três notas para calcular a média.</p>

                <form action="/respostaEx05" method="POST">
                    @CSRF
                    <div class="mb-3">
                        <label for="nota01" class="form-label">Nota 01</label>
                        <input type="number" name="nota01" class="form-control" placeholder="Insira a primeira nota" required>
                    </div>

                    <div class="mb-3">
                        <label for="nota02" class="form-label">Nota 02</label>
                        <input type="number" name="nota02" class="form-control" placeholder="Insira a segunda nota" required>
                    </div>

                    <div class="mb-3">
                        <label for="nota03" class="form-label">Nota 03</label>
                        <input type="number" name="nota03" class="form-control" placeholder="Insira a terceira nota" required>
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
