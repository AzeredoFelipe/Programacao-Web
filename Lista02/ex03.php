<!-- Crie a seguinte hierarquia para representar diferentes tipos de telefones:
    1. Telefone: abstrata, representa o DDD e o número de um telefone, define um método abstrato
    calculaCusto (da ligação, recebe como parâmetro o tempo da ligacão)
    2. Fixo: derivada de Telefone, também armazena o custo por minuto, e sobrescreve calculaCusto,
    multiplicando o tempo da ligacão pelo custo do minuto
    3. Celular: abstrata, derivada de Telefone, também armazena o custo do minuto base, e o nome da
    operadora
    4. PrePago: derivada de Celular, calcula o custo da ligacão aplicando um acréscimo de 40% no custo do
    minuto base
    5. PosPago: derivada de Celular, calcula o custo da ligacão aplicando um desconto de 10% no custo do
    minuto base -->

    <?php

abstract class Telefone
{
    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero)
    {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempo);
}

class Fixo extends Telefone
{
    private $custoMinuto;

    public function __construct($ddd, $numero, $custoMinuto)
    {
        parent::__construct($ddd, $numero);
        $this->custoMinuto = $custoMinuto;
    }

    public function calculaCusto($tempo)
    {
        return $tempo * $this->custoMinuto;
    }
}

abstract class Celular extends Telefone
{
    protected $custoMinutoBase;
    protected $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora)
    {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->operadora = $operadora;
    }
}

class PrePago extends Celular
{
    
    public function calculaCusto($tempo)
    {
        return $tempo * $this->custoMinutoBase * 1.4; 
    }
}

class PosPago extends Celular
{

    public function calculaCusto($tempo)
    {
        return $tempo * $this->custoMinutoBase * 0.9; 
    }
}
