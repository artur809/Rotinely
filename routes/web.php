<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminController;


# ROTAS DE LOGIN ==================================================================================
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');

Route::middleware('auth')->group(function () {

    # ROTAS DE TAREFA ==================================================================================
    Route::get('/home', [TarefaController::class, 'index'])->name('home');
    Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');
    Route::post('/tarefas/{id}/update', [TarefaController::class, 'update'])->name('tarefas.update');
    Route::get('/tarefas/{id}/destroy', [TarefaController::class, 'destroy'])->name('tarefas.destroy');
    Route::get('/tarefas/{id}/concluir', [TarefaController::class, 'concluir'])->name('tarefas.concluir');
    Route::get('/pesquisa', [TarefaController::class, 'pesquisa'])->name('pesquisa');

    # ROTAS DE PERFIL ==================================================================================
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
    Route::post('/perfil/update', [PerfilController::class, 'update'])->name('perfil.update');
    Route::get('/perfil/destroy', [PerfilController::class, 'destroy'])->name('perfil.destroy');

    # ROTAS DE ADMIN ==================================================================================
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/{id}/update', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/{id}/destroy', [AdminController::class, 'destroy'])->name('admin.destroy');

});