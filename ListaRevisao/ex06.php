<?php require_once("header.php"); ?>

<h1>Estimativa de Custos do Projeto</h1>

<p>Este formulário estima os custos de um projeto com base nas horas previstas, taxa por hora dos funcionários e custos adicionais. Abaixo estão as regras para o cálculo:</p>
<table class="table">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Fórmula</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Custo de Mão de Obra</td>
            <td>Horas Previstas × Taxa por Hora</td>
        </tr>
        <tr>
            <td>Custo Total do Projeto</td>
            <td>Custo de Mão de Obra + Custos Adicionais</td>
        </tr>
    </tbody>
</table>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="horasPrevistas">Horas Previstas</label>
            <input type="number" id="horasPrevistas" name="horasPrevistas" class="form-control" required />
        </div>
        <div class="col">
            <label for="taxaHora">Taxa por Hora (R$)</label>
            <input type="number" id="taxaHora" name="taxaHora" class="form-control" required />
        </div>
        <div class="col">
            <label for="custosAdicionais">Custos Adicionais (R$)</label>
            <input type="number" id="custosAdicionais" name="custosAdicionais" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular Custos</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $horasPrevistas = $_POST["horasPrevistas"];
    $taxaHora = $_POST["taxaHora"];
    $custosAdicionais = $_POST["custosAdicionais"];

    $custoMaoObra = $horasPrevistas * $taxaHora;
    $custoTotalProjeto = $custoMaoObra + $custosAdicionais;

    $custoMaoObraFormatado = number_format($custoMaoObra, 2, ',', '.');
    $custoTotalProjetoFormatado = number_format($custoTotalProjeto, 2, ',', '.');

    echo "<div class='mt-4'><h3>Resultados:</h3>";
    echo "<p><strong>Custo de Mão de Obra:</strong> R$ $custoMaoObraFormatado</p>";
    echo "<p><strong>Custo Total do Projeto:</strong> R$ $custoTotalProjetoFormatado</p></div>";
}

require_once("footer.php");
?>
