<?php require_once("header.php"); ?>

<h1>Cálculo de Horas Trabalhadas</h1>

<p>Informe os horários de entrada e saída para calcular as horas trabalhadas.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="entrada">Hora de Entrada</label>
            <input type="time" id="entrada" name="entrada" class="form-control" />
        </div>
        <div class="col">
            <label for="saida">Hora de Saída</label>
            <input type="time" id="saida" name="saida" class="form-control" />
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Calcular Horas</button>
            </div>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $horaEntrada = $_POST["entrada"];
    $horaSaida = $_POST["saida"];

    if ($horaSaida > $horaEntrada) {
        $totalHoras = calcularHorasTrabalhadas($horaEntrada, $horaSaida);
        echo "<div class='alert alert-info mt-3'>Total de horas trabalhadas: " . $totalHoras->format("%H:%I") . "</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Erro: A hora de saída deve ser posterior à de entrada.</div>";
    }
}

function calcularHorasTrabalhadas($entrada, $saida)
{
    $inicio = new DateTime($entrada);
    $fim = new DateTime($saida);
    return $fim->diff($inicio);
}
?>

<?php require_once("footer.php"); ?>
