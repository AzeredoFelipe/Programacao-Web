<?php require_once("header.php"); ?>

<h1>Avaliação de Desempenho do Projeto</h1>

<p>Simule o desempenho do projeto com base no progresso das tarefas, prazos e produtividade. Insira as informações abaixo:</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo">Prazo para Finalização do Projeto</label>
            <input type="date" id="prazo" name="prazo" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividadesEstabelecidas">Atividades Estabelecidas</label>
            <input type="number" id="atividadesEstabelecidas" name="atividadesEstabelecidas" class="form-control" required min="0" />
        </div>
        <div class="col">
            <label for="atividadesDesenvolvidas">Atividades Desenvolvidas</label>
            <input type="number" id="atividadesDesenvolvidas" name="atividadesDesenvolvidas" class="form-control" required min="0" />
        </div>
        <div class="col">
            <label for="atividadesDia">Atividades por Dia</label>
            <input type="number" id="atividadesDia" name="atividadesDia" class="form-control" required min="1" />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular Desempenho</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $prazo = $_POST["prazo"];
    $atividadesEstabelecidas = $_POST["atividadesEstabelecidas"];
    $atividadesDesenvolvidas = $_POST["atividadesDesenvolvidas"];
    $atividadesDia = $_POST["atividadesDia"];

    $diasRestantes = (strtotime($prazo) - strtotime(date("Y-m-d"))) / 86400;
    $atividadesRestantes = $atividadesEstabelecidas - $atividadesDesenvolvidas;

    if ($atividadesRestantes < 0) {
        echo "<div class='alert alert-warning mt-4'>Todas as atividades já foram desenvolvidas!</div>";
    } else {
        $diasNecessarios = $atividadesRestantes / $atividadesDia;


        echo "<div class='mt-4'>";
        if ($diasNecessarios > $diasRestantes) {
            echo "<div class='alert alert-danger'>O projeto não será entregue no prazo.</div>";
        } else {
            echo "<div class='alert alert-success'>O projeto será entregue no prazo.</div>";
        }
        echo "<p><strong>Dias restantes:</strong> $diasRestantes</p>";
        echo "<p><strong>Atividades restantes:</strong> $atividadesRestantes</p>";
        echo "<p><strong>Dias necessários para completar:</strong> " . ceil($diasNecessarios) . "</p>";
        echo "</div>";
    }
}

require_once("footer.php");
?>
