<?php require_once("header.php"); ?>

<h1>Cálculo de Bônus Anual</h1>

<p>Distribua um bônus anual entre os funcionários baseado em seu desempenho. Informe o total de lucros, o nome do funcionário e uma nota de 1 a 5. Notas variam de 0,1% a 0,7% dos lucros.</p>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros">Valor dos Lucros</label>
            <input type="number" id="lucros" name="lucros" class="form-control" required />
        </div>
        <div class="col">
            <label for="nome">Nome do Funcionário</label>
            <input type="text" id="nome" name="nome" class="form-control" required />
        </div>
        <div class="col">
            <label for="escala">Nota de Desempenho</label>
            <input type="number" id="escala" name="escala" class="form-control" min="1" max="5" required />
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Calcular Bônus</button>
            </div>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $lucros = $_POST["lucros"];
    $nome = trim($_POST["nome"]);
    $escala = $_POST["escala"];

    $bonus = 0;

    
    if ($escala >= 1 && $escala <= 5) {
        $percentual = $escala * 0.001; 
        $bonus = $lucros * $percentual;
    } else {
        echo "<div class='alert alert-danger'>Escala inválida. Informe uma nota de 1 a 5.</div>";
    }

    if ($bonus > 0) {
        echo "<div class='alert alert-success mt-3'>O funcionário <strong>$nome</strong> receberá um bônus de R$ " . number_format($bonus, 2, ",", ".") . "</div>";
    }
}
?>

<?php require_once("footer.php"); ?>
