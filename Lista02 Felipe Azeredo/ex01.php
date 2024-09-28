<!-- A partir da classe Ponto apresentada abaixo:

Atributos:
-----------------
- x: int
- y: int

Métodos:
--------------------------------
+ setX(x: int): void
+ getX(): int
+ setY(y: int): void
+ getY(): int
+ deslocar(dx: int, dy: int)
+ toString(): String

1. Crie um construtor que recebe dois parâmetros de coordenadas X e Y;
2. Introduza um atributo de classe para contar o número de objetos criados
3. Faça com que o construtor atualize o contador de pontos
4. Acrescente um método de classe para retornar o valor desse atributo de contagem
5. Acrescente um método para calcular e retornar a distância entre a instância do ponto e um outro
objeto Ponto qualquer;
6. Acrescente um método para calcular e retornar distância entre a instância do ponto e um outro ponto
dado pelas coordenadas X e Y;
7. Acrescente um método para calcular e retornar a distância entre dois pontos, dadas as coordenadas
X1, Y1 e X2, Y2 (como este método não utiliza nenhum atributo para fazer este cálculo, ele pode ser
criado como um método de classe).

A distância entre dois pontos é calculada por: delta = sqrt((x2 - x1)² + (y2 - y1)²)

Função raiz quadrada: sqrt( )
Função potenciação: pow($base, $expoente) -->

<?php

class Ponto
{
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public static function getContador()
    {
        return self::$contador;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }

    public function deslocar($dx, $dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function distancia(Ponto $outroPonto)
    {
        return sqrt(pow($outroPonto->getX() - $this->x, 2) + pow($outroPonto->getY() - $this->y, 2));
    }

    public function distanciaXY($x, $y)
    {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    public static function distanciaEntrePontos($x1, $y1, $x2, $y2)
    {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }

    public function toString()
    {
        return "Ponto({$this->x}, {$this->y})";
    }
}
