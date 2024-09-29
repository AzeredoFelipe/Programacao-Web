<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("index");
});

// Exercício 01
Route::get("/ex01", [ListaController::class, "mostrarEx01"]);
Route::post("/respostaEx01", [ListaController::class, "calcularEx01"]);

// Exercício 02
Route::get("/ex02", [ListaController::class, "mostrarEx02"]);
Route::post("/respostaEx02", [ListaController::class, "calcularEx02"]);

// Exercício 03
Route::get("/ex03", [ListaController::class, "mostrarEx03"]);
Route::post("/respostaEx03", [ListaController::class, "calcularEx03"]);

// Exercício 04
Route::get("/ex04", [ListaController::class, "mostrarEx04"]);
Route::post("/respostaEx04", [ListaController::class, "calcularEx04"]);

// Exercício 05
Route::get("/ex05", [ListaController::class, "mostrarEx05"]);
Route::post("/respostaEx05", [ListaController::class, "calcularEx05"]);

// Exercício 06
Route::get("/ex06", [ListaController::class, "mostrarEx06"]);
Route::post("/respostaEx06", [ListaController::class, "calcularEx06"]);

// Exercício 07
Route::get("/ex07", [ListaController::class, "mostrarEx07"]);
Route::post("/respostaEx07", [ListaController::class, "calcularEx07"]);

// Exercício 08
Route::get("/ex08", [ListaController::class, "mostrarEx08"]);
Route::post("/respostaEx08", [ListaController::class, "calcularEx08"]);

// Exercício 09
Route::get("/ex09", [ListaController::class, "mostrarEx09"]);
Route::post("/respostaEx09", [ListaController::class, "calcularEx09"]);

// Exercício 10
Route::get("/ex10", [ListaController::class, "mostrarEx10"]);
Route::post("/respostaEx10", [ListaController::class, "calcularEx10"]);

// Exercício 11
Route::get("/ex11", [ListaController::class, "mostrarEx11"]);
Route::post("/respostaEx11", [ListaController::class, "calcularEx11"]);

// Exercício 12
Route::get("/ex12", [ListaController::class, "mostrarEx12"]);
Route::post("/respostaEx12", [ListaController::class, "calcularEx12"]);

// Exercício 13
Route::get("/ex13", [ListaController::class, "mostrarEx13"]);
Route::post("/respostaEx13", [ListaController::class, "calcularEx13"]);

// Exercício 14
Route::get("/ex14", [ListaController::class, "mostrarEx14"]);
Route::post("/respostaEx14", [ListaController::class, "calcularEx14"]);

// Exercício 15
Route::get("/ex15", [ListaController::class, "mostrarEx15"]);
Route::post("/respostaEx15", [ListaController::class, "calcularEx15"]);

// Exercício 16
Route::get("/ex16", [ListaController::class, "mostrarEx16"]);
Route::post("/respostaEx16", [ListaController::class, "calcularEx16"]);

// Exercício 17
Route::get("/ex17", [ListaController::class, "mostrarEx17"]);
Route::post("/respostaEx17", [ListaController::class, "calcularEx17"]);

// Exercício 18
Route::get("/ex18", [ListaController::class, "mostrarEx18"]);
Route::post("/respostaEx18", [ListaController::class, "calcularEx18"]);

// Exercício 19
Route::get("/ex19", [ListaController::class, "mostrarEx19"]);
Route::post("/respostaEx19", [ListaController::class, "calcularEx19"]);

// Exercício 20
Route::get("/ex20", [ListaController::class, "mostrarEx20"]);
Route::post("/respostaEx20", [ListaController::class, "calcularEx20"]);
