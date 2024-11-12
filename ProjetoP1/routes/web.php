<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DashboardController;

// Rota para o dashboard (somente para usuários autenticados)
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'gerarGrafico'])->name('dashboard');

// Página inicial (não requer autenticação)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rotas para gerenciamento de Clientes e Produtos, acessíveis apenas para usuários autenticados
Route::middleware('auth')->group(function () {
    // Rotas de gerenciamento de Clientes
    Route::resource('clientes', ClienteController::class);

    // Rotas de gerenciamento de Produtos
    Route::resource('produtos', ProdutoController::class);

    // Rotas de perfil (editar, atualizar e excluir perfil)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
