<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    // Exercício 01
    public function mostrarEx01()
    {
        return view("ex01");
    }

    public function calcularEx01(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

        return $valor1 + $valor2;
    }

    // Exercício 02
    public function mostrarEx02()
    {
        return view("ex02");
    }

    public function calcularEx02(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

        return $valor1 - $valor2;
    }

    // Exercício 03
    public function mostrarEx03()
    {
        return view("ex03");
    }

    public function calcularEx03(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

        return $valor1 * $valor2;
    }

    // Exercício 04
    public function mostrarEx04()
    {
        return view("ex04");
    }

    public function calcularEx04(Request $request)
    {
        $valor1 = (int)$request->input("val01");
        $valor2 = (int)$request->input("val02");

        if ($valor2 == 0) {
            return "Divisão por zero!";
        }

        return $valor1 / $valor2;
    }

    // Exercício 05
    public function mostrarEx05()
    {
        return view("ex05");
    }

    public function calcularEx05(Request $request)
    {
        $nota1 = (float)$request->input("nota01");
        $nota2 = (float)$request->input("nota02");
        $nota3 = (float)$request->input("nota03");

        return ($nota1 + $nota2 + $nota3) / 3;
    }

    // Exercício 06
    public function mostrarEx06()
    {
        return view("ex06");
    }

    public function calcularEx06(Request $request)
    {
        $celsius = (float)$request->input("celsius");

        return ($celsius * 9 / 5) + 32;
    }

    // Exercício 07
    public function mostrarEx07()
    {
        return view("ex07");
    }

    public function calcularEx07(Request $request)
    {
        $fahrenheit = (float)$request->input("fahrenheit");

        return ($fahrenheit - 32) * 5 / 9;
    }

    // Exercício 08
    public function mostrarEx08()
    {
        return view("ex08");
    }

    public function calcularEx08(Request $request)
    {
        $largura = (float)$request->input("largura");
        $altura = (float)$request->input("altura");

        return $largura * $altura;
    }

    // Exercício 09
    public function mostrarEx09()
    {
        return view("ex09");
    }

    public function calcularEx09(Request $request)
    {
        $raio = (float)$request->input("raio");

        return pi() * $raio * $raio;
    }

    // Exercício 10
    public function mostrarEx10()
    {
        return view("ex10");
    }

    public function calcularEx10(Request $request)
    {
        $largura = (float)$request->input("largura");
        $altura = (float)$request->input("altura");

        return 2 * ($largura + $altura);
    }

    // Exercício 11
    public function mostrarEx11()
    {
        return view("ex11");
    }

    public function calcularEx11(Request $request)
    {
        $raio = (float)$request->input("raio");

        return 2 * pi() * $raio;
    }

    // Exercício 12
    public function mostrarEx12()
    {
        return view("ex12");
    }

    public function calcularEx12(Request $request)
    {
        $base = (float)$request->input("base");
        $expoente = (float)$request->input("expoente");

        return $base ** $expoente;
    }

    // Exercício 13
    public function mostrarEx13()
    {
        return view("ex13");
    }

    public function calcularEx13(Request $request)
    {
        $metros = (float)$request->input("metros");

        return $metros * 100;
    }

    // Exercício 14
    public function mostrarEx14()
    {
        return view("ex14");
    }

    public function calcularEx14(Request $request)
    {
        $quilometros = (float)$request->input("quilometros");

        return $quilometros * 0.621371;
    }

    // Exercício 15
    public function mostrarEx15()
    {
        return view("ex15");
    }

    public function calcularEx15(Request $request)
    {
        $peso = (float)$request->input("peso");
        $altura = (float)$request->input("altura");

        return $peso / ($altura * $altura);
    }

    // Exercício 16
    public function mostrarEx16()
    {
        return view("ex16");
    }

    public function calcularEx16(Request $request)
    {
        $preco = (float)$request->input("preco");
        $desconto = (float)$request->input("desconto");

        return $preco - ($preco * $desconto / 100);
    }

    // Exercício 17
    public function mostrarEx17()
    {
        return view("ex17");
    }

    public function calcularEx17(Request $request)
    {
        $capital = (float)$request->input("capital");
        $taxa = (float)$request->input("taxa");
        $periodo = (float)$request->input("periodo");

        return $capital * $taxa * $periodo;
    }

    // Exercício 18
    public function mostrarEx18()
    {
        return view("ex18");
    }

    public function calcularEx18(Request $request)
    {
        $capital = (float)$request->input("capital");
        $taxa = (float)$request->input("taxa");
        $periodo = (float)$request->input("periodo");

        return $capital * (1 + $taxa) ** $periodo;
    }

    // Exercício 19
    public function mostrarEx19()
    {
        return view("ex19");
    }

    public function calcularEx19(Request $request)
    {
        $dias = (int)$request->input("dias");

        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;

        return "Horas: $horas, Minutos: $minutos, Segundos: $segundos";
    }

    // Exercício 20
    public function mostrarEx20()
    {
        return view("ex20");
    }

    public function calcularEx20(Request $request)
    {
        $distancia = (float)$request->input("distancia");
        $tempo = (float)$request->input("tempo");

        return $distancia / $tempo;
    }
}
