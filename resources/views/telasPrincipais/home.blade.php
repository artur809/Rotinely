@extends('layouts.app')
@section('content')

    <h2 class="text-center mb-3" style="color: dark">Minhas Tarefas</h2>

    @foreach($tarefas as $tarefa)
        @include('partes.partesTarefas.cardTarefasHome', ['tarefa' => $tarefa])
    @endforeach
    <button class="btn corDark rounded-circle btn-adicionar text-white"
        data-bs-toggle="modal" data-bs-target="#modalCriarTarefa">
        +
    </button>

    @include('partes.partesTarefas.modalCriarTarefa')
    @include('partes.partesTarefas.modalEditarTarefa')
@endsection