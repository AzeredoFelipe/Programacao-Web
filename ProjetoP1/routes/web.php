<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create'); // Formulário para criar cliente


Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index'); // Listar clientes
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store'); // Armazenar cliente
Route::get('/clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show'); // Mostrar cliente específico
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit'); // Formulário para editar cliente
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update'); // Atualizar cliente
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy'); // Excluir cliente

require __DIR__ . '/auth.php'; 