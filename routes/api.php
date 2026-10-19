<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TarefaController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:10,1');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::get('/tarefas', [TarefaController::class, 'index']);
    Route::patch('/tarefas/{id}/status', [TarefaController::class, 'status']);
    Route::get('/categorias', [TarefaController::class, 'categorias']);
});