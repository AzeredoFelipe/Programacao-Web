<!-- Analise o código da classe Funcionario

public class Funcionario {
    private String nome;
    private int codigo;
    private double salarioBase;

    public Funcionario(int codigo, String nome, double salarioBase) {
        this.codigo = codigo;
        this.nome = nome;
        this.salarioBase = salarioBase;
    }

    public String getNome() {
        return nome;
    }

    public int getCodigo() {
        return codigo;
    }

    public double getSalarioBase() {
        return salarioBase;
    }

    public void setSalarioBase(double salarioBase) {
        this.salarioBase = salarioBase;
    }

    public double getSalarioLiquido() {
        double inss = salarioBase * 0.1;
        double ir = 0.0;

        if (salarioBase > 2000) {
            ir = (salarioBase - 2000.0) * 0.12;
        }

        return (salarioBase - inss - ir);
    }

    @Override
    public String toString() {
        return (getClass().getSimpleName() + "\n Codigo: " + getCodigo() + "\n Nome: " + getNome() + "\n Salario Base: " + getSalarioBase() + "\n Salario Liquido: " + getSalarioLiquido());
    }
}

A partir dessa classe, desenvolva as seguintes classes:
    1. Servente: classe derivada da classe Funcionario. Um servente recebe um adicional de 5% a título de
    insalubridade
    2. Motorista: classe derivada da classe Funcionario. Para cada motorista é necessário armazenar o
    número da carteira de motorista
    3. MestreDeObras: classe derivada da classe Servente. Para cada mestre de obras é necessário
    armazenar quantos funcionarios estão sob sua supervisão. Um mestre de obras ganha um adicional
    de 10% para cada grupo de 10 funcionários que estão sob seu comando.
    4. Em todas as classes devem ser acrescentados os métodos get/set necessários. -->

    <?php

class Empregado
{
    private $nome;
    private $id;
    private $salario;

    public function __construct($id, $nome, $salario)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function obterNome()
    {
        return $this->nome;
    }

    public function obterId()
    {
        return $this->id;
    }

    public function obterSalario()
    {
        return $this->salario;
    }

    public function alterarSalario($salario)
    {
        $this->salario = $salario;
    }

    public function calcularSalarioLiquido()
    {
        $inss = $this->salario * 0.1;
        $ir = 0.0;

        if ($this->salario > 2000) {
            $ir = ($this->salario - 2000.0) * 0.12;
        }

        return ($this->salario - $inss - $ir);
    }

    public function exibirDados()
    {
        return "Empregado\n ID: " . $this->obterId() . "\n Nome: " . $this->obterNome() . "\n Salario Base: " . $this->obterSalario() . "\n Salario Liquido: " . $this->calcularSalarioLiquido();
    }
}

class Ajudante extends Empregado
{
    public function calcularSalarioLiquido()
    {
        return parent::calcularSalarioLiquido() * 1.05;
    }
}

class Condutor extends Empregado
{
    private $numeroCNH;

    public function __construct($id, $nome, $salario, $numeroCNH)
    {
        parent::__construct($id, $nome, $salario);
        $this->numeroCNH = $numeroCNH;
    }

    public function obterNumeroCNH()
    {
        return $this->numeroCNH;
    }

    public function alterarNumeroCNH($numeroCNH)
    {
        $this->numeroCNH = $numeroCNH;
    }
}

class Supervisor extends Ajudante
{
    private $numeroFuncionarios;

    public function __construct($id, $nome, $salario, $numeroFuncionarios)
    {
        parent::__construct($id, $nome, $salario);
        $this->numeroFuncionarios = $numeroFuncionarios;
    }

    public function obterNumeroFuncionarios()
    {
        return $this->numeroFuncionarios;
    }

    public function alterarNumeroFuncionarios($numeroFuncionarios)
    {
        $this->numeroFuncionarios = $numeroFuncionarios;
    }

    public function calcularSalarioLiquido()
    {
        return parent::calcularSalarioLiquido() * (1 + ($this->numeroFuncionarios / 10) * 0.1);
    }
}
