<?php require_once("header.php"); ?>

<h1>Cálculo de Salário Semanal</h1>

<p>Insira as horas trabalhadas e o valor da hora para calcular o salário semanal.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horasTrabalhadas">Quantidade de Horas Trabalhadas</label>
            <input type="number" id="horasTrabalhadas" name="horasTrabalhadas" class="form-control" required />
        </div>
        <div class="col">
            <label for="valorHora">Valor da Hora em Reais</label>
            <input type="number" id="valorHora" name="valorHora" class="form-control" required />
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-warning">Calcular Salário</button>
            </div>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $horas = $_POST["horasTrabalhadas"];
    $valor = $_POST["valorHora"];

    $salarioSemanal = $horas * $valor;
    echo "<div class='alert alert-success mt-3'>Salário semanal: R$ " . number_format($salarioSemanal, 2, ',', '.') . "</div>";
}
?>

<?php require_once("footer.php"); ?>
