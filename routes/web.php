<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');
Route::post('/entrar', [AuthController::class, 'entrar'])->name('entrar');
Route::post('/registrar', [AuthController::class, 'registrar'])->name('registrar');
Route::get('/home', [TarefaController::class, 'home'])->name('home');
Route::get('/pesquisa', [TarefaController::class, 'pesquisa'])->name('pesquisa');
Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');