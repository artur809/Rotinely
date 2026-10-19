@extends('layouts.app')
@section('content')

    <h2 class="text-center mb-3" style="color: #1668A3">Minhas Tarefas</h2>

    @forelse($tarefas as $tarefa)
        @include('partes.partesTarefas.cardTarefasHome', ['tarefa' => $tarefa])
    @empty
        <div class="empty-state">
            <i class="bi bi-clipboard-check"></i>
            <p>Nenhuma tarefa ainda. Que tal criar a primeira?</p>
        </div>
    @endforelse

    <button class="btn corDark rounded-circle btn-adicionar text-white"
        data-bs-toggle="modal" data-bs-target="#modalCriarTarefa">
        +
    </button>

    @include('partes.partesTarefas.modalCriarTarefa')
@endsection