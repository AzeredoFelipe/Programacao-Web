<?php require_once("header.php"); ?>

<h1>Cálculo de Férias</h1>

<p>Implemente uma funcionalidade para calcular a quantidade de dias de férias a que um funcionário tem direito com base no tempo de serviço na empresa. A regra é simples: para cada 30 dias trabalhados, o funcionário tem direito a 1 dia de férias. O máximo de dias de férias que pode ser solicitado é de 30 dias.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="diasTrabalhados">Dias Trabalhados</label>
            <input type="number" id="diasTrabalhados" name="diasTrabalhados" class="form-control" required />
        </div>
        <div class="col">
            <label for="diasFerias">Dias de Férias Desejados</label>
            <input type="number" id="diasFerias" name="diasFerias" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular Férias</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $diasTrabalhados = $_POST["diasTrabalhados"];
    $diasDesejados = $_POST["diasFerias"];


    $diasFeriasPossiveis = floor($diasTrabalhados / 30);

    if ($diasFeriasPossiveis > 30) {
        $diasFeriasPossiveis = 30;
    }

    if ($diasDesejados > $diasFeriasPossiveis) {
        echo "Você tem direito a apenas " . $diasFeriasPossiveis . " dias de férias.";
    } else {
        echo "Dias de férias que você pode tirar: " . $diasDesejados;
    }
}

require_once("footer.php");
?>
