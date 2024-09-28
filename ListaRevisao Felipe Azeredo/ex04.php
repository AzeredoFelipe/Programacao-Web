<?php require_once("header.php"); ?>

<h1>Atribuição de Tarefas</h1>

<p>Implemente uma funcionalidade que permita cadastrar dados de uma tarefa e do funcionário disponível para realizá-la. Os dados incluem: nome da tarefa, total de horas necessárias, complexidade (alta, média ou baixa), nome do funcionário, horas disponíveis e nível de experiência (júnior, pleno ou sênior).</p>
<p>A lógica de atribuição segue as regras abaixo:</p>
<ol>
    <li>O funcionário deve ter pelo menos 10% a mais de horas disponíveis do que o total da tarefa.</li>
    <li>Funcionários júnior só podem assumir tarefas de complexidade baixa.</li>
    <li>Funcionários pleno podem assumir tarefas de complexidade baixa e média.</li>
    <li>Funcionários sêniores podem assumir tarefas de complexidade média e alta.</li>
</ol>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <label for="nomeTarefa">Tarefa</label>
            <input type="text" id="nomeTarefa" name="nomeTarefa" class="form-control" required />
        </div>
        <div class="col">
            <label for="totalHorasTarefa">Horas da Tarefa</label>
            <input type="number" id="totalHorasTarefa" name="totalHorasTarefa" class="form-control" required />
        </div>
        <div class="col">
            <label for="complexidadeTarefa">Complexidade</label>
            <select id="complexidadeTarefa" name="complexidadeTarefa" class="form-control" required>
                <option value="alta">Alta</option>
                <option value="media">Média</option>
                <option value="baixa">Baixa</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="nomeFuncionario">Funcionário</label>
            <input type="text" id="nomeFuncionario" name="nomeFuncionario" class="form-control" required />
        </div>
        <div class="col">
            <label for="totalHorasFuncionario">Horas Disponíveis</label>
            <input type="number" id="totalHorasFuncionario" name="totalHorasFuncionario" class="form-control" required />
        </div>
        <div class="col">
            <label for="nivelExperiencia">Experiência</label>
            <select id="nivelExperiencia" name="nivelExperiencia" class="form-control" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Verificar Disponibilidade</button>
        </div>
    </div>
</form>

<?php
if ($_POST) {
    $nomeTarefa = $_POST["nomeTarefa"];
    $totalHorasTarefa = $_POST["totalHorasTarefa"];
    $complexidadeTarefa = $_POST["complexidadeTarefa"];
    $nomeFuncionario = $_POST["nomeFuncionario"];
    $totalHorasFuncionario = $_POST["totalHorasFuncionario"];
    $nivelExperiencia = $_POST["nivelExperiencia"];

    $mensagem = "";

    if ($totalHorasFuncionario < $totalHorasTarefa * 1.1) {
        $mensagem = "O funcionário não tem horas disponíveis suficientes para assumir a tarefa.";
    } else {
        switch ($nivelExperiencia) {
            case "junior":
                if ($complexidadeTarefa !== "baixa") {
                    $mensagem = "Funcionários júnior só podem assumir tarefas de complexidade baixa.";
                }
                break;
            case "pleno":
                if ($complexidadeTarefa === "alta") {
                    $mensagem = "Funcionários pleno podem assumir apenas tarefas de complexidade baixa e média.";
                }
                break;
            case "senior":
                if ($complexidadeTarefa === "baixa") {
                    $mensagem = "Funcionários sêniores só podem assumir tarefas de complexidade média e alta.";
                }
                break;
        }
    }

    echo $mensagem;
}

require_once("footer.php"); 
?>
